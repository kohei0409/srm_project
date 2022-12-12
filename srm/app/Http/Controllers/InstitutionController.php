<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInstitutionRequest;
use App\Http\Requests\UpdateInstitutionRequest;
use App\Models\Institution;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $deleted_at = $request->input('deleted_at');

        $query = Institution::query();
        if ($deleted_at == "") {
            $query->where('deleted_at', null);
        }

        $institutions = $query->get();


        return view('institution.index', ['institution' => $institutions]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {

        $search = $request->input('search');
        $sales = $request->input('sales');
        $pet = $request->input('pet');
        $madori = $request->input('madori');
        $button_one_price = $request->input('button_one_price');
        $button_one = $request->input('button_one');
        $button_two_price = $request->input('button_two_price');
        $button_two = $request->input('button_two');
        $areasize = $request->input('areasize');
        $button_areasize = $request->input('button_areasize');
        $deleted_at = $request->input('deleted_at');

        $query = Institution::query();


        if ($deleted_at == "") {
            $query->where('deleted_at', null);
        }

        if ($search != "") {
            $query->where('sheetformat', $search);
        }
        if ($sales != "") {
            $query->where('status1', $sales);
        }
        if ($pet != "") {
            $query->where('ispetok', $pet);
        }
        if ($madori != "") {
            $query->where('madori', $madori);
        }

        if ($button_one == "1") {

            if ($button_one_price != "") {
                $query->where('price1', '>=', $button_one_price);
            }
        } else {

            if ($button_one_price != "") {
                $query->where('price1', '<=', $button_one_price);
            }
        }

        if ($button_two == "1") {

            if ($button_two_price != "") {
                $query->where('price2', '>=', $button_two_price);
            }
        } else {

            if ($button_two_price != "") {
                $query->where('price2', '<=', $button_two_price);
            }
        }

        if ($button_areasize == "1") {

            if ($areasize != "") {
                $query->where('areasize', '>=', $areasize);
            }
        } else {

            if ($areasize != "") {
                $query->where('areasize', '<=', $areasize);
            }
        }


        $institutions = $query->get();


//        dd($institutions);

        return view('institution.index', [
                'institution' => $institutions]
        );
    }



    /**
     * Detail the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {

        $institutions = Institution::find($id);

        if (is_null($institutions)) {

            return redirect((route('search')));
        }

        return view('institution.detail', [
                'institution' => $institutions]
        );

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete()
    {
        //
    }

}
