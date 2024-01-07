
  <!-- <form method="post" action="file-import" enctype="multipart/form-data" novalidate="" class="box has-advanced-upload">
  @csrf  
  <div class="box-input">
      <input type="file" name="files" id="file" class="box-file" data-multiple-caption="{count} files selected" multiple="">
      <label for="file"><strong>Choose a file</strong><span class="box-dragndrop"> or drag it here</span>.</label>
      <button type="submit" class="button">Upload</button>
    </div>
</div> -->

@include('parts.head')

<main>
    <div class="cashier-dashboard-area">
    @include('parts.sidebar')
      <div class=" cashier-dashboard-main">
      @include('parts.frontheader')
        <div class="cashier-breadcrumb-area px-7 py-9 bg-white mb-5 hidden">
          <div class="cashier-breadcrumb-area-inner px-0.5">
            <h5 class="text-[20px] text-heading font-bold mb-3 leading-none">Dashboard </h5>
            <span class="text-[14px] text-bodyText font-normal leading-none">Dashboard</span>
          </div>
        </div>
        <div class="cashier-content-area mt-[30px] px-7">
          <div class="cashier-salereturns-area bg-white p-7 custom-shadow rounded-lg pt-5 mb-5">
            <h4 class="text-[20px] font-bold text-heading mb-9">Voucher</h4>
            <div class="cashier-managesale-top-btn default-light-theme mb-7">
              <button class="mb-1" onclick="document.location='createpayment.html'">
                <i class="fa-light fa-plus"></i> Create Payment
              </button>
              <div class="mb-1 btn-primary button">
                <i class="fa-light fa-folder-plus"></i>
                <span class="cashier-input-field-style relative inline-block">
                  <span class="cashier-input-field-file">
                    <input type="file" id="fileUpload"  onchange="uploadFile()">
                    <label for="fileUpload">Import Biller</label>
                    <progress id="progressBar" value="0" max="100"></progress>
                  </span>
                </span>
              </div>
            </div>

            <main>
            <table class="table table-striped table-bordered" id="index" width="100%">
              <thead>
                <tr>
               <th><th>
                <th>Ticket Id</th>
                <th>Time</th>
                <th>Action</th>
                <th>Type</th>
                <th>Type Detail</th>
                <th>Account</th>
                <th>Parent</th>
                <th>Amount</th>
                <th>Script</th>
                <th>Price</th>
                <th>Close Price</th>
                <th>Total PnL</th>
                <th>SL</th>
                <th>TP</th>
                <th>Open Position</th>
                <th>Open Date</th>
                <th>Time Diff</th>
                <th>Created By</th>
                <th>Comment</th>
                <th>IP</th>
                <th>Script Description</th>
                <th>Expiry Date</th>
                <th>Method</th>
                <th>Contract Size</th>
              
                </tr>
              </thead>
            </table>
        </main>
          </div>
        </div>
        <div class="cashier-copyright-area">
          <div class="cashier-copyright text-center bg-themeBlue h-20 leading-[80px] mt-20">
            <span class="text-[15px] text-white font-normal">© Copyright by BDevs -2022-2023</span>
          </div>
        </div>
      </div>
    </div>
  </main>
 

  <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('assets/js/metisMenu.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
  <script src="{{ asset('assets/js/apexcharts.js') }}"></script>
  <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js'></script>
<script src='https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.1/b-2.3.3/b-html5-2.3.3/b-print-2.3.3/fh-3.3.1/r-2.4.0/sb-1.4.0/datatables.min.js'>
</script><script  src="{{ asset('assets/js/datascript.js') }}"></script>
</body>


<!-- Mirrored from codeskdhaka.com/html/cashiar-prev/cashiar/paymentlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jan 2024 18:23:22 GMT -->
</html>
<script>
        function uploadFile() {
            var input = document.getElementById('fileUpload');
            var file = input.files[0];

            if (file) {
                var formData = new FormData();
                formData.append('file', file);

                $.ajax({
                    url: '/file/file-import', // Replace with the actual server-side script
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData, 
                    processData: false,
                    contentType: false,
                    xhr: function () {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.onprogress = function (event) {
                            if (event.lengthComputable) {
                                var percentComplete = (event.loaded / event.total) * 100;
                                var progressBar = document.getElementById('progressBar');
                                progressBar.value = percentComplete;
                            }
                        };
                        return xhr;
                    },
                    success: function (response) {
                        // Simulate a 2-second delay before handling the response
                        setTimeout(function () {
                           consolde.log(res)
                            // You can perform further actions with the response here
                        }, 2000);
                    }
                });
            }
        }
  </script>