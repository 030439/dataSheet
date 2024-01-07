
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
            <h4 class="text-[20px] font-bold text-heading mb-9">Biller</h4>
            <div class="cashier-managesale-top-btn default-light-theme mb-7">
              <!-- <button class="mb-1 open">
                <i class="fa-light fa-plus"></i> Add Biller
              </button> -->
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
        <!-- <div class="cashier-copyright-area">
          <div class="cashier-copyright text-center bg-themeBlue h-20 leading-[80px] mt-20">
            <span class="text-[15px] text-white font-normal">© Copyright by BDevs -2022-2023</span>
          </div>
        </div> -->
      </div>
    </div>
    <!-- popup modals  -->

    <div style="display: none;" class="pop-outer">
      <div class="relative md:h-auto">
        <div class="cashiar-dialog-content">
          <div class="popup-body">
            <div class="cashier-popup-inner">
              <div class="cashier-popup-header relative mb-11">
                <div class="cashier-popup-header-title">
                  <h4 class="text-[20px] text-heading font-bold">Add Biller</h4>
                </div>
                <div class="cashier-popup-header-close absolute -top-0 right-0">
                  <div class="default-light-theme">
                    <a href="javascript:void(0)" class="close">
                      <i class="fa-light fa-xmark"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="grid grid-cols-12 gap-x-7 maxSm:gap-x-0">
                <div class="md:col-span-6 col-span-12">
                  <div class="cashier-select-field mb-6">
                    <h5 class="text-[15px] text-heading font-semibold mb-3">Name</h5>
                    <div class="cashier-input-field-style">
                      <div class="single-input-field w-full">
                        <input type="text" placeholder="Ahsan Enterprise">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="md:col-span-6 col-span-12">
                  <div class="cashier-select-field mb-6">
                    <h5 class="text-[15px] text-heading font-semibold mb-3">Email</h5>
                    <div class="cashier-input-field-style">
                      <div class="single-input-field w-full">
                        <input type="email" placeholder="info@example.com">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="md:col-span-6 col-span-12">
                  <div class="cashier-select-field mb-6">
                    <h5 class="text-[15px] text-heading font-semibold mb-3">Phone</h5>
                    <div class="cashier-input-field-style">
                      <div class="single-input-field w-full">
                        <input type="text" placeholder="+02 587 698 771">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="md:col-span-6 col-span-12">
                  <div class="cashier-calender-field mb-6">
                    <h5 class="text-[15px] text-black font-semibold mb-3">Date of Join</h5>
                    <div class="cashier-calender-field-style">
                      <div class="single-input-field w-full">
                        <input type="date">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="md:col-span-6 col-span-12">
                  <div class="cashier-select-field mb-6">
                    <h5 class="text-[15px] text-heading font-semibold mb-3">Address</h5>
                    <div class="cashier-input-field-style">
                      <div class="single-input-field w-full">
                        <input type="text" placeholder="2751 Polk Street, Tucson">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="md:col-span-6 col-span-12">
                  <div class="cashier-select-field mb-6">
                    <h5 class="text-[15px] text-heading font-semibold mb-3">Zip</h5>
                    <div class="cashier-input-field-style">
                      <div class="single-input-field w-full">
                        <input type="text" placeholder="85701">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="md:col-span-6 col-span-12">
                  <div class="cashier-select-field mb-6">
                    <h5 class="text-[15px] text-heading font-semibold mb-3">Biller Code</h5>
                    <div class="cashier-input-field-style">
                      <div class="single-input-field w-full">
                        <input type="text" placeholder="BW1-00570">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="md:col-span-6 col-span-12">
                  <div class="cashier-select-field mb-6">
                    <h5 class="text-[15px] text-heading font-semibold mb-3">NID Number</h5>
                    <div class="cashier-input-field-style">
                      <div class="single-input-field w-full">
                        <input type="text" placeholder="5863600570">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-span-12">
                  <div class="cashier-popup-btn default-light-theme pt-1.5">
                    <button type="submit" class="btn-primary">Create Biller</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>


  @include('parts.footer')
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

