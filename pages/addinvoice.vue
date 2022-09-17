<template lang="">
  <div>
    
    <div class="container mb-5 mt-3">
      <div class="row d-flex align-items-baseline">
        <div class="col-xl-9">
          <p style="color: #7e8d9f; font-size: 20px">
            Invoice >> <strong>ID: #123-123</strong>
          </p>
        </div>
        <div class="col-xl-3 float-end">
          <a
            class="btn btn-light text-capitalize border-0"
            data-mdb-ripple-color="dark"
            ><i class="fas fa-print text-primary"></i> Print</a
          >
          <a class="btn btn-light text-capitalize" data-mdb-ripple-color="dark"
            ><i class="far fa-file-pdf text-danger"></i> Export</a
          >
        </div>
      </div>
    </div>

    <div class="container">
      <div class="card-header">
        Invoice
        <strong>01/01/01/2018</strong>
        <span class="float-right"> <strong>Status:</strong> Pending</span>
      </div>
      <div class="card-body">
        <div class="row mb-4">
          <div class="col-sm-6">
            <h6 class="mb-3">From:</h6>
            <div>
              <strong>Talesell</strong>
            </div>
            <div>Madalinskiego 8</div>
            <div>71-101 Szczecin, Poland</div>
            <div>Email: info@webz.com.pl</div>
            <div>Phone: 084-46663333</div>
          </div>

          <div class="col-sm-6">
            <h6 class="mb-3">To:</h6>
            <div>
              <strong>Tiger Kung</strong>
            </div>
            <div>Attn: Daniel Marek</div>
            <div>43-190 Mikolow, Poland</div>
            <div>Email: marek@daniel.com</div>
            <div>Phone: 081-23456789</div>
          </div>
        </div>

        <div class="table-responsive-sm">
          <table class="table table-striped">
            <thead>
              <tr>
                <th class="center">#</th>
                <th>Item</th>
                <th>Description</th>

                <th class="right">Unit Cost</th>
                <th class="center">Qty</th>
                <th class="right">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="center">1</td>
                <td class="left strong">Hp</td>
                <td class="left">Black for printer</td>

                <td class="right">115฿</td>
                <td class="center">2</td>
                <td class="right">230฿</td>
              </tr>

              <tr>
                <td class="center">2</td>
                <td class="left">Canon</td>
                <td class="left">yellow for printer</td>

                <td class="right">120฿</td>
                <td class="center">1</td>
                <td class="right">120฿</td>
              </tr>
              <tr>
                <td class="center">3</td>
                <td class="left">Canon</td>
                <td class="left">red for printer</td>

                <td class="right">120฿</td>
                <td class="center">1</td>
                <td class="right">120฿</td>
              </tr>
              <tr>
                <td class="center">4</td>
                <td class="left">Canon</td>
                <td class="left">Blue</td>

                <td class="right">120฿</td>
                <td class="center">1</td>
                <td class="right">120฿</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="row">
          <div class="col-lg-4 col-sm-5"></div>

          <div class="col-lg-4 col-sm-5 ml-auto">
            <table class="table table-clear">
              <tbody>
                <tr>
                  <td class="left">
                    <strong>Subtotal</strong>
                  </td>
                  <td class="right">548.7฿</td>
                </tr>

                <tr>
                  <td class="left">
                    <strong>VAT (7%)</strong>
                  </td>
                  <td class="right">41.3฿</td>
                </tr>
                <tr>
                  <td class="left">
                    <strong>Total</strong>
                  </td>
                  <td class="right">
                    <strong>590฿</strong>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  layout: "coreLayout",
};
</script>
<style ></style>
