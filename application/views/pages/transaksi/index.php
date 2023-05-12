<!DOCTYPE html>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-md-4">
          <div class="form-group">
            <label>No. Transaksi</label>
            <input type="text" value="TRX1205200300001" class="form-control text-sm" placeholder="No Transaksi">
          </div>
          <div class="form-group">
            <label>Tanggal Transaksi</label>
            <input type="date" class="form-control text-sm" placeholder="Tanggal Transaksi">
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="form-group">
            <label>No. Invoice</label>
            <input type="text" value="IN929198491028" class="form-control text-sm" placeholder="No Invoice">
          </div>
        </div>
      </div>
      <hr class="my-3">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Kode</th>
              <th>Nama Item</th>
              <th>Harga</th>
              <th>Qty</th>
              <th>Total</th>
              <th></th>
            </tr>
          </thead>
          <tbody id="result">
            <tr>
              <td>IN929198491028</td>
              <td>
                <select class="form-control selectpicker" data-live-search="true">
                  <option>Apple</option>
                  <option>Orange</option>
                  <option>Banana</option>
                  <option>Mango</option>
                  <option>Strawberry</option>
                </select>
              </td>
              <td>Rp5.000</td>
              <td>5</td>
              <td>Rp25.000</td>
              <td>
                <button type="button" onclick="deleteItem(this)" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></button>
                <button type="button" onclick="addItem()" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i></button>
              </td>
            </tr>
          </tbody>
          <tfoot>
            <td colspan="7" class="text-lg">Total: <span class="font-bold">Rp25.000</span></td>
          </tfoot>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<script type="text/javascript">
const addItem = () => {
  $('#result').append(`
    <tr>
    <td>1290388912u97</td>
    <td>
    <select class="form-control selectpicker" data-live-search="true">
    <option>Apple</option>
    <option>Orange</option>
    <option>Banana</option>
    <option>Mango</option>
    <option>Strawberry</option>
    </select>
    </td>
    <td>Rp5.000</td>
    <td>5</td>
    <td>Rp25.000</td>
    <td>
    <button type="button" onclick="deleteItem(this)" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></button>
    <button type="button" onclick="addItem()" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i></button>
    </td>
    </tr>`)
    $('.selectpicker').selectpicker('refresh');
  }
  const deleteItem = (element) => {
    $(element).closest('tr').remove();
  }
  </script>
