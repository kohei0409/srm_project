<!-- Footer -->

<div class="print_none">
    <footer class="mt-auto">
        <div class="container-fluid mt-4 mb-6 text-muted">
            <div class="row justify-content-between">
                <div class="col">
                    Supported by © Adtrust.co.,ltd | <a href="{{route('home')}}">空室管理</a> | <a href="{{route('users')}}">ユーザ管理</a> |
                </div>

                <div class="col-auto">
                    v1.2.1
                </div>
            </div> <!-- / .row -->
        </div>
    </footer>
</div>

</main> <!-- / main -->

<script
    src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.1/js/jquery.tablesorter.min.js"></script>
<script>
    $(function () {
        $('.sort-table').tablesorter({
            textExtraction: function (node) {
                var attr = $(node).attr('data-value');
                if (typeof attr !== 'undefined' && attr !== false) {
                    return attr;
                }
                return $(node).text();
            }
        });
    });
</script>

<script src="{{ asset('/js/theme.bundle.js')  }}"></script>
</body>
</html>
