<div class="modal fade" id="select_pages" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Select Pages</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <select class="form-control" id="page_links_qulint">
                  @foreach($get_pages as $pagese)
                      <option value="appele">{{$pagese->title}}</option>

                  @endforeach
               </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="add_link_pages()">Add Link</button>
            </div>
        </div>
    </div>
</div>


<script>
    function add_link_pages() {
        var selectedCountry = $('#page_links_qulint').children("option:selected").val();
        $("input[name='href']").val(selectedCountry);
    }
</script>
