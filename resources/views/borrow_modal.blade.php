<div class="modal fade" tabindex="-1" role="dialog" id="borrow">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Borrow Book</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/borrow" method="post">
        @csrf
        <input type="hidden" name="book_id" id="book_id" value>
        <div class="modal-body">
            <p class="lead">Book information: </p>
            <div class="card">
                <div class="card-body">
                    <p class="title"></p>
                    <p class="author"></p>
                    <p class="library-section"></p>
                </div>
            </div>
        
                <div class="form-group">
                    <label for="return">Return Date: </label>
                    <input type="date" class="form-control" name="return" id="return">
                </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Borrow</button>
        </div>
      </form>
    </div>
  </div>
</div>