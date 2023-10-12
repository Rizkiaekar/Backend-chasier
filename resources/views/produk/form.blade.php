<div class="modal fade" id="modalFormProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="produk">
          @csrf
          <div class="form-group row">
            <label for="nama" class="col-sm-4 col-form-label">Nama Produk</label>
            <div class="col-sm-8">
              <input type="text" class="nama" id="nama" name="nama" placeholder="nama">
            </div>
          </div>

          <div class="form-group row">
            <label for="price" class="col-sm-4 col-form-label">Price</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="price" name="price" placeholder="price">
            </div>
          </div>

          <div class="form-group row">
            <label for="stock" class="col-sm-4 col-form-label">Stock</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="stock" name="stock" placeholder="stock">
            </div>
          </div>

          <div class="form-group row">
            <label for="tag" class="col-sm-4 col-form-label">Tag</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="tag" name="tag" placeholder="tag">
            </div>
          </div>





      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>