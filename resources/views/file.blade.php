
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
      <div class="cashier-dashboard-sidebar">
        <div class=" cashier-menu-wrapper bg-white border-r border-b border-solid border-grayBorder py-6 px-7 maxLg:px-5
        maxLg:py-6">
          <div>
            <div class="cashier-header-profile relative pl-5 flex flex-wrap items-center maxMd:pr-0 mb-7">
              <div class="cashier-header-profile-img w-12 maxSm:mr-0 md:mr-0 cursor-pointer">
                <a href="profile.html" class="rounded-[50%] overflow-hidden block"><img
                    src="assets/img/icon/watson.png" class="object-cover" alt="profile not found"></a>
              </div>
              <div class="cashier-header-profile-info pl-2.5 cursor-pointer">
                <div>
                  <a class="text-[15px] font-bold text-heading cursor-pointer" href="profile.html">Shane Watson
                    <span
                      class="text-[10px] font-bold leading-none pt-0.5 pb-[1px] px-1 border border-solid border-[#FFC403] text-[#FFC403] inline-block ml-2 uppercase rounded-[3px]">Pro</span></a>
                </div>
                <span class="text-[13px] font-normal text-bodyText cursor-pointer">Admin User</span>
              </div>
            </div>
            <div class="cashier-menu px-0.5">
              <ul id="metismenu">
                <li><a href="dashboard.html">
                    <svg id="Component_3_1" data-name="Component 3 – 1" xmlns="http://www.w3.org/2000/svg"
                      width="22.461" height="17.875" viewBox="0 0 22.461 17.875">
                      <path id="Path_5727" data-name="Path 5727"
                        d="M16832.014-18218.125v-5.35h-3.564v5.35h-5.352a.84.84,0,0,1-.627-.266.851.851,0,0,1-.266-.627v-6.686a.291.291,0,0,1,.01-.041c0-.02,0-.033,0-.041l8.01-6.605,8.014,6.605a.177.177,0,0,1,.014.082v6.686a.843.843,0,0,1-.266.627.84.84,0,0,1-.627.266Zm8.348-7.867-10.133-8.627-10.17,8.467a.521.521,0,0,1-.334.1.531.531,0,0,1-.293-.156l-.334-.457a.458.458,0,0,1-.1-.33.409.409,0,0,1,.15-.3l10.02-8.348a1.638,1.638,0,0,1,1.057-.361,1.65,1.65,0,0,1,1.063.361l3.4,2.842v-2.715a.431.431,0,0,1,.123-.32.434.434,0,0,1,.32-.127h2.672a.434.434,0,0,1,.32.127.414.414,0,0,1,.129.32v5.686l3.053,2.535a.4.4,0,0,1,.15.3.449.449,0,0,1-.1.33l-.375.617a.479.479,0,0,1-.293.15A.55.55,0,0,1,16840.361-18225.992Z"
                        transform="translate(-16819 18236)" fill="#fff" />
                    </svg>Dashboard
                  </a></li>

                <li>
                  <a href="javascript:void(0)" class="has-arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17.999" height="18.003" viewBox="0 0 17.999 18.003">
                      <path id="bank_3_" data-name="bank (3)"
                        d="M16.183,1.766,10.643.22a5.976,5.976,0,0,0-3.22,0L1.917,1.765a2.56,2.56,0,0,0,.69,5.021H15.5a2.559,2.559,0,0,0,.687-5.02ZM15.5,5.38H2.607A1.153,1.153,0,0,1,2.3,3.12L7.8,1.576a4.57,4.57,0,0,1,2.462,0L15.8,3.121A1.152,1.152,0,0,1,15.5,5.38Zm-5.038,9.81a.7.7,0,0,1-.7-.7V8.826a.7.7,0,0,1,1.406,0v5.661A.7.7,0,0,1,10.458,15.19Zm-2.848,0a.7.7,0,0,1-.7-.7V8.826a.7.7,0,0,1,1.406,0v5.661A.7.7,0,0,1,7.61,15.19Zm-5.626.035a.7.7,0,0,1-.7-.7v-5.7a.7.7,0,0,1,1.406,0v5.7A.7.7,0,0,1,1.984,15.226Zm2.848-.035a.7.7,0,0,1-.7-.7V8.826a.7.7,0,0,1,1.406,0v5.661A.7.7,0,0,1,4.832,15.19Zm7.243,2.11a.7.7,0,0,1-.7.7H.753a.7.7,0,0,1,0-1.406H11.372a.7.7,0,0,1,.7.7Zm5.978-2.828a2.24,2.24,0,0,1-.7,1.623,2.343,2.343,0,0,1-1.129.606v.6a.7.7,0,0,1-1.406,0v-.65a8.8,8.8,0,0,1-1.561-.455.7.7,0,0,1,.52-1.307,6.43,6.43,0,0,0,1.951.46.91.91,0,0,0,.919-.876,1.01,1.01,0,0,0-1.1-.876,2.751,2.751,0,0,1-1.838-.631,2.265,2.265,0,0,1,1.148-3.911V8.369a.7.7,0,0,1,1.406,0v.769a7.348,7.348,0,0,1,1.239.368.7.7,0,0,1-.51,1.311,4.752,4.752,0,0,0-1.814-.379.832.832,0,0,0-.814.884c0,.519.475.867,1.182.867a2.407,2.407,0,0,1,2.51,2.282Zm-9-11.87a.879.879,0,1,0,.879.879A.879.879,0,0,0,9.051,2.6Z"
                        transform="translate(-0.053 0)" fill="#6f4ef6" />
                    </svg>Bank
                  </a>
                  <ul>
                    <li><a href="createbank.html">Add Bank</a></li>
                    <li><a href="banklist.html">Bank List</a></li>
                    <li><a href="balancetransfer.html">Create Transfer</a></li>
                    <li><a href="transferlist.html">Transfer List</a></li>
                  </ul>
                </li>

                <li><a href="javascript:void(0)" class="has-arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.861" height="18.87" viewBox="0 0 18.861 18.87">
                      <g id="Line" transform="translate(-2 -1.987)">
                        <path id="Path_5783" data-name="Path 5783"
                          d="M18.84,20.857H4.021A2.021,2.021,0,0,1,2,18.836V8.058A2.021,2.021,0,0,1,4.021,6.038H6.762a4.715,4.715,0,0,1,9.336,0H18.84a2.021,2.021,0,0,1,2.021,2.021V18.836A2.021,2.021,0,0,1,18.84,20.857ZM3.347,11.427v7.41a.674.674,0,0,0,.674.674H18.84a.674.674,0,0,0,.674-.674v-7.41Zm11.377-1.347h4.789V8.058a.674.674,0,0,0-.674-.674H16.1a4.661,4.661,0,0,1-1.374,2.694ZM11.431,3.343A3.368,3.368,0,1,0,14.8,6.711,3.368,3.368,0,0,0,11.431,3.343ZM3.347,10.079H8.137A4.661,4.661,0,0,1,6.789,7.385H4.021a.674.674,0,0,0-.674.674Zm14.146,6.736H16.82a.674.674,0,0,1,0-1.347h.674a.674.674,0,0,1,0,1.347Zm-2.694,0h-.674a.674.674,0,0,1,0-1.347H14.8a.674.674,0,0,1,0,1.347Zm-5.389,0H5.368a.674.674,0,0,1,0-1.347H9.41a.674.674,0,1,1,0,1.347Zm1.6-8.292a.674.674,0,0,1-.478-.2L9.342,7.136a.676.676,0,0,1,.957-.957l.714.714,1.415-1.415a.674.674,0,0,1,.957.95l-1.9,1.9a.674.674,0,0,1-.472.2Z"
                          transform="translate(0 0)" fill="#6f4ef6" />
                      </g>
                    </svg>Payment
                  </a>
                  <ul>
                    <li><a href="javascript:void(0)" class="has-arrow">Create Payment</a>
                      <ul>
                        <li><a href="createpayment.html">Voucher</a></li>
                        <li><a href="createpaymentinvoice.html">Invoice</a></li>
                      </ul>
                    </li>
                    <li><a href="javascript:void(0)" class="has-arrow">Payment List</a>
                      <ul>
                        <li><a href="paymentlist.html">Voucher</a></li>
                        <li><a href="paymentlistinvoice.html">Invoice</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li><a href="javascript:void(0)" class="has-arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.861" height="17.107" viewBox="0 0 18.861 17.107">
                      <path id="ticket"
                        d="M18.592,13.291l-.215.622Zm0-4.975.215.622ZM2.769,13.291l.215.622Zm0-4.975-.215.622Zm11.008.321a.658.658,0,0,0-.93-.93ZM7.584,12.97a.658.658,0,0,0,.93.93ZM5.417,18.041A2.851,2.851,0,0,1,2.566,15.19H1.25a4.167,4.167,0,0,0,4.167,4.167ZM18.8,15.19a2.851,2.851,0,0,1-2.851,2.851v1.316a4.167,4.167,0,0,0,4.167-4.167ZM15.944,3.566A2.851,2.851,0,0,1,18.8,6.417h1.316A4.167,4.167,0,0,0,15.944,2.25ZM5.417,2.25A4.167,4.167,0,0,0,1.25,6.417H2.566A2.851,2.851,0,0,1,5.417,3.566Zm13.39,10.419A1.975,1.975,0,0,1,17.479,10.8H16.164a3.291,3.291,0,0,0,2.213,3.109ZM17.479,10.8a1.975,1.975,0,0,1,1.328-1.866l-.431-1.243A3.291,3.291,0,0,0,16.164,10.8Zm-13.6,0a1.975,1.975,0,0,1-1.328,1.866l.431,1.244A3.291,3.291,0,0,0,5.2,10.8ZM2.554,8.938A1.975,1.975,0,0,1,3.882,10.8H5.2A3.291,3.291,0,0,0,2.985,7.694ZM20.111,7.294V6.417H18.8v.877ZM18.8,14.312v.877h1.316v-.877Zm-17.545,0v.877H2.566v-.877ZM2.566,7.294V6.417H1.25v.877ZM15.944,18.041H5.417v1.316H15.944Zm0-15.791H5.417V3.566H15.944ZM2.554,12.669a1.819,1.819,0,0,0-1.3,1.643H2.566a.286.286,0,0,1,.089-.192.807.807,0,0,1,.329-.208ZM18.807,8.938a1.819,1.819,0,0,0,1.3-1.643H18.8a.286.286,0,0,1-.089.192.808.808,0,0,1-.33.208ZM2.985,7.694a.808.808,0,0,1-.329-.208.286.286,0,0,1-.089-.192H1.25a1.819,1.819,0,0,0,1.3,1.643Zm15.392,6.219a.807.807,0,0,1,.33.208.286.286,0,0,1,.089.192h1.316a1.819,1.819,0,0,0-1.3-1.643ZM8.268,8.172a.219.219,0,0,1-.219.219V9.707A1.535,1.535,0,0,0,9.584,8.172Zm-.219.219a.219.219,0,0,1-.219-.219H6.514A1.535,1.535,0,0,0,8.049,9.707ZM7.83,8.172a.219.219,0,0,1,.219-.219V6.636A1.535,1.535,0,0,0,6.514,8.172Zm.219-.219a.219.219,0,0,1,.219.219H9.584A1.535,1.535,0,0,0,8.049,6.636Zm5.483,5.483a.219.219,0,0,1-.219.219V14.97a1.535,1.535,0,0,0,1.535-1.535Zm-.219.219a.219.219,0,0,1-.219-.219H11.777a1.535,1.535,0,0,0,1.535,1.535Zm-.219-.219a.219.219,0,0,1,.219-.219V11.9a1.535,1.535,0,0,0-1.535,1.535Zm.219-.219a.219.219,0,0,1,.219.219h1.316A1.535,1.535,0,0,0,13.312,11.9Zm-.465-5.51L7.584,12.97l.93.93,5.264-5.264Z"
                        transform="translate(-1.25 -2.25)" fill="#6f4ef6" />
                    </svg>Voucher
                  </a>
                  <ul>
                    <li><a href="javascript:void(0)" class="has-arrow">Debit</a>
                      <ul>
                        <li><a href="createdebitvoucher.html">Create</a></li>
                        <li><a href="debitlist.html">List</a></li>
                      </ul>
                    </li>
                    <li><a href="javascript:void(0)" class="has-arrow">Credit</a>
                      <ul>
                        <li><a href="createcreditvoucher.html">Create</a></li>
                        <li><a href="creditlist.html">List</a></li>
                      </ul>
                    </li>
                    <li><a href="javascript:void(0)" class="has-arrow">Journal</a>
                      <ul>
                        <li><a href="createjournal.html">Create</a></li>
                        <li><a href="journallist.html">List</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li><a href="javascript:void(0)" class="has-arrow">
                    <svg id="price-tag" xmlns="http://www.w3.org/2000/svg" width="18.861" height="20.488"
                      viewBox="0 0 18.861 20.488">
                      <path id="Path_8" data-name="Path 8"
                        d="M38.88,12.734l0,0L33.971,5.566a1.206,1.206,0,0,0-.746-.5l-.015,0-3.033-.58a4.059,4.059,0,1,0-7.287,2.1L20.665,8.9a1.209,1.209,0,0,0-.337.839v8.946a1.8,1.8,0,0,0,1.8,1.8h8.008a1.794,1.794,0,0,0,1.313-.57l6.944-4.684a1.8,1.8,0,0,0,.486-2.5ZM26.133,1.2a2.885,2.885,0,0,1,2.855,3.051c-2.828-.541-2.666-.511-2.713-.515h0a1.215,1.215,0,0,0-1.019.366L23.739,5.688A2.926,2.926,0,0,1,23.274,4.1a2.883,2.883,0,0,1,2.859-2.9Zm4.6,17.486a.6.6,0,0,1-.589.6h-8.02a.6.6,0,0,1-.6-.6V9.741a.014.014,0,0,1,0-.009l2.208-2.309a3.977,3.977,0,0,0,2.374.778.6.6,0,0,0,0-1.2,2.781,2.781,0,0,1-1.531-.459l1.54-1.61a.011.011,0,0,1,.01,0,.01.01,0,0,1,.009,0l4.591,4.8a.012.012,0,0,1,0,.009Zm6.985-4.449-5.785,3.9V16.387l3.879-2.617a.6.6,0,1,0-.672-1l-3.208,2.163V13.321L34.4,11.66a.6.6,0,0,0-.671-1l-1.79,1.208V9.741A1.207,1.207,0,0,0,31.6,8.9L28.173,5.318l4.8.917a.014.014,0,0,1,.006,0l0,0,4.906,7.164A.6.6,0,0,1,37.723,14.238Z"
                        transform="translate(-20.328 0)" fill="#6f4ef6" />
                      <path id="Path_9" data-name="Path 9"
                        d="M113.222,231.335a5.967,5.967,0,0,1-1.517-.705.692.692,0,0,1,.345-1.054,1.557,1.557,0,0,1,1.089.157.6.6,0,1,0,.508-1.084,3.612,3.612,0,0,0-.66-.23v-.311a.6.6,0,1,0-1.2,0v.295a1.873,1.873,0,0,0-.823,3.172,6.472,6.472,0,0,0,1.858.893c1.052.372.593,1.819-.458,1.826a1.728,1.728,0,0,1-1.241-.326.6.6,0,0,0-.844.195.613.613,0,0,0,.207.823,2.7,2.7,0,0,0,1.3.488v.225a.6.6,0,0,0,1.2,0v-.29A2.136,2.136,0,0,0,113.222,231.335Z"
                        transform="translate(-106.601 -218.404)" fill="#6f4ef6" />
                    </svg>Ledger
                  </a>
                  <ul>
                    <li><a href="createledger.html">Create</a></li>
                    <li><a href="ledgerlist.html">List</a></li>
                    <li><a href="ledgergroup.html">Ledger Group</a></li>
                  </ul>
                </li>

                <li><a href="javascript:void(0)" class="has-arrow">
                    <svg id="my-business" xmlns="http://www.w3.org/2000/svg" width="17.999" height="15.89"
                      viewBox="0 0 17.999 15.89">
                      <path id="Path_10" data-name="Path 10"
                        d="M15.737,30H2.262L0,36.476v.617A2.643,2.643,0,0,0,1.055,39.2V45.89h15.89V39.2A2.643,2.643,0,0,0,18,37.093v-.617Zm.992,6.038h-3.05l-.87-4.983h2.18ZM1.055,37.093H4.236a1.591,1.591,0,1,1-3.182,0Zm7.418,0a1.591,1.591,0,1,1-3.182,0ZM5.391,36.038l.87-4.983H8.472v4.983Zm4.136,0V31.055h2.211l.87,4.983Zm3.182,1.055a1.591,1.591,0,1,1-3.182,0Zm-9.7-6.038h2.18l-.87,4.983H1.27ZM15.89,44.836H2.109V39.683a2.645,2.645,0,0,0,2.654-1.008,2.643,2.643,0,0,0,4.236,0,2.643,2.643,0,0,0,4.236,0,2.645,2.645,0,0,0,2.654,1.008Zm-.536-6.152a1.593,1.593,0,0,1-1.591-1.591h3.182A1.593,1.593,0,0,1,15.354,38.683Z"
                        transform="translate(0 -30)" fill="#6f4ef6" />
                    </svg>Bill
                  </a>
                  <ul>
                    <li><a href="javascript:void(0)" class="has-arrow">Vendor</a>
                      <ul>
                        <li><a href="addbill.html">Add Bill</a></li>
                        <li><a href="managebill.html">Manage Bill</a></li>
                      </ul>
                    </li>
                    <li><a href="javascript:void(0)" class="has-arrow">Customer</a>
                      <ul>
                        <li><a href="customerbill.html">Add Bill</a></li>
                        <li><a href="customermanagebill.html">Manage Bill</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="javascript:void(0)" class="has-arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19.789" height="19.789" viewBox="0 0 19.789 19.789">
                      <g id="chat" transform="translate(0)">
                        <g id="Group_2770" data-name="Group 2770" transform="translate(0 0)">
                          <g id="Group_2769" data-name="Group 2769" transform="translate(0 0)">
                            <path id="Path_5784" data-name="Path 5784"
                              d="M18.109,11.849a.773.773,0,0,0-1.433.579l.91,2.252-2.7-1.192a.773.773,0,0,0-.615,0,7.453,7.453,0,0,1-2.942.594A6.7,6.7,0,0,1,4.406,7.813c0-3.455,3.1-6.267,6.918-6.267s6.918,2.811,6.918,6.267a6.3,6.3,0,0,1-.069.886.773.773,0,0,0,1.529.228,7.8,7.8,0,0,0,.086-1.114,7.471,7.471,0,0,0-2.5-5.548A8.785,8.785,0,0,0,11.325,0a8.785,8.785,0,0,0-5.96,2.265A7.513,7.513,0,0,0,2.891,7.147,6.249,6.249,0,0,0,0,12.35a6,6,0,0,0,1.185,3.583L.057,18.726a.773.773,0,0,0,1.028,1l3.255-1.435a7.357,7.357,0,0,0,2.578.459l.057,0a7.316,7.316,0,0,0,3.637-.986,6.654,6.654,0,0,0,2.339-2.277,8.9,8.9,0,0,0,1.606-.446L18.7,16.863a.773.773,0,0,0,1.028-1ZM6.919,17.2l-.031,0a5.8,5.8,0,0,1-2.258-.462.773.773,0,0,0-.615,0l-1.81.8L2.787,16.1a.773.773,0,0,0-.128-.791A4.512,4.512,0,0,1,1.546,12.35,4.6,4.6,0,0,1,2.975,9.056a7.8,7.8,0,0,0,2.287,4.179,8.64,8.64,0,0,0,5.624,2.379A5.681,5.681,0,0,1,6.919,17.2Z"
                              transform="translate(0 0)" fill="#6f4ef6" />
                            <ellipse id="Ellipse_18" data-name="Ellipse 18" cx="1.049" cy="0.525" rx="1.049" ry="0.525"
                              transform="translate(10.491 7.344)" fill="#6f4ef6" />
                            <ellipse id="Ellipse_19" data-name="Ellipse 19" cx="1.049" cy="0.525" rx="1.049" ry="0.525"
                              transform="translate(13.638 7.344)" fill="#6f4ef6" />
                            <circle id="Ellipse_20" data-name="Ellipse 20" cx="0.525" cy="0.525" r="0.525"
                              transform="translate(7.343 7.344)" fill="#6f4ef6" />
                          </g>
                        </g>
                      </g>
                    </svg>SMS
                  </a>
                  <ul>
                    <li><a href="newmessage.html">Create Message</a></li>
                    <li><a href="message.html">Message List</a></li>
                    <li><a href="createemail.html">Create Email</a></li>
                    <li><a href="email.html">Email List</a></li>
                  </ul>
                </li>
                <li><a href="javascript:void(0)" class="has-arrow">
                    <svg id="_36_Filter" data-name="36 Filter" xmlns="http://www.w3.org/2000/svg" width="15.435"
                      height="16.571" viewBox="0 0 15.435 16.571">
                      <path id="Path_32" data-name="Path 32"
                        d="M126.224,8.9a3.976,3.976,0,0,1-3.032-1.513A5,5,0,0,1,122,4.224a4.224,4.224,0,1,1,8.447,0,5,5,0,0,1-1.191,3.163A3.976,3.976,0,0,1,126.224,8.9Zm0-7.282a2.608,2.608,0,0,0-2.605,2.605,3.4,3.4,0,0,0,.809,2.119,2.188,2.188,0,0,0,3.592,0,3.4,3.4,0,0,0,.809-2.119A2.608,2.608,0,0,0,126.224,1.618Z"
                        transform="translate(-118.618)" fill="#6f4ef6" />
                      <path id="Path_33" data-name="Path 33"
                        d="M32.129,306.861a.809.809,0,0,1-.809-.809V304.2a2.394,2.394,0,0,0-2.581-2.579H21.7a2.394,2.394,0,0,0-2.581,2.579v1.855a.809.809,0,0,1-1.618,0V304.2a4,4,0,0,1,4.2-4.2h7.039a4,4,0,0,1,4.2,4.2v1.855a.809.809,0,0,1-.807.809Z"
                        transform="translate(-17.5 -290.291)" fill="#6f4ef6" />
                    </svg>People
                  </a>
                  <ul>
                    <li><a href="vendor.html">Vendor</a></li>
                    <li><a href="supplier.html">Supplier</a></li>
                    <li><a href="biller.html">Biller</a></li>
                    <li><a href="customer.html">Customer</a></li>
                  </ul>
                </li>
                <li><a href="javascript:void(0)" class="has-arrow">
                    <svg id="_36_Filter_2" data-name="36 Filter" xmlns="http://www.w3.org/2000/svg" width="15.435"
                      height="16.571" viewBox="0 0 15.435 16.571">
                      <path id="Path_32_2" data-name="Path 32"
                        d="M126.224,8.9a3.976,3.976,0,0,1-3.032-1.513A5,5,0,0,1,122,4.224a4.224,4.224,0,1,1,8.447,0,5,5,0,0,1-1.191,3.163A3.976,3.976,0,0,1,126.224,8.9Zm0-7.282a2.608,2.608,0,0,0-2.605,2.605,3.4,3.4,0,0,0,.809,2.119,2.188,2.188,0,0,0,3.592,0,3.4,3.4,0,0,0,.809-2.119A2.608,2.608,0,0,0,126.224,1.618Z"
                        transform="translate(-118.618)" fill="#6f4ef6" />
                      <path id="Path_33_2" data-name="Path 33"
                        d="M32.129,306.861a.809.809,0,0,1-.809-.809V304.2a2.394,2.394,0,0,0-2.581-2.579H21.7a2.394,2.394,0,0,0-2.581,2.579v1.855a.809.809,0,0,1-1.618,0V304.2a4,4,0,0,1,4.2-4.2h7.039a4,4,0,0,1,4.2,4.2v1.855a.809.809,0,0,1-.807.809Z"
                        transform="translate(-17.5 -290.291)" fill="#6f4ef6" />
                    </svg>User Management
                  </a>
                  <ul>
                    <li><a href="adduser.html">Add User</a></li>
                    <li><a href="userlist.html">User List</a></li>
                    <li><a href="userrole.html">User Role</a></li>
                  </ul>
                </li>
                <li><a href="javascript:void(0)" class="has-arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17.485" height="17.485" viewBox="0 0 17.485 17.485">
                      <g id="Group_11" data-name="Group 11" transform="translate(0 0)">
                        <g id="Group_10" data-name="Group 10">
                          <path id="Path_24" data-name="Path 24"
                            d="M83.768,237H81.685a.683.683,0,1,0,0,1.366h2.083a.683.683,0,1,0,0-1.366Z"
                            transform="translate(-78.236 -228.906)" fill="#6f4ef6" />
                          <path id="Path_25" data-name="Path 25"
                            d="M83.768,315H81.685a.683.683,0,1,0,0,1.366h2.083a.683.683,0,1,0,0-1.366Z"
                            transform="translate(-78.236 -304.243)" fill="#6f4ef6" />
                          <path id="Path_26" data-name="Path 26"
                            d="M83.768,392H81.685a.683.683,0,1,0,0,1.366h2.083a.683.683,0,1,0,0-1.366Z"
                            transform="translate(-78.236 -378.612)" fill="#6f4ef6" />
                          <path id="Path_27" data-name="Path 27"
                            d="M213.767,392h-2.083a.683.683,0,1,0,0,1.366h2.083a.683.683,0,1,0,0-1.366Z"
                            transform="translate(-203.795 -378.612)" fill="#6f4ef6" />
                          <path id="Path_28" data-name="Path 28"
                            d="M88.208,80H81.685a.683.683,0,0,0-.683.683v2.7a.683.683,0,0,0,.683.683h6.523a.683.683,0,0,0,.683-.683v-2.7A.683.683,0,0,0,88.208,80Zm-.683,2.7H82.368V81.367h5.157V82.7Z"
                            transform="translate(-78.236 -77.269)" fill="#6f4ef6" />
                          <path id="Path_29" data-name="Path 29"
                            d="M16.8,12.022a.683.683,0,0,0,.683-.683V9.631a.683.683,0,0,0-.683-.683H13.387V.684A.683.683,0,0,0,12.7,0H.683A.683.683,0,0,0,0,.684v14.07a2.735,2.735,0,0,0,2.732,2.732H14.768a2.732,2.732,0,0,0,2.716-2.732.683.683,0,0,0-1.366,0,1.366,1.366,0,0,1-1.366,1.366h0a1.368,1.368,0,0,1-1.366-1.366V10.314h2.732v1.025A.683.683,0,0,0,16.8,12.022Zm-14.07,4.1a1.368,1.368,0,0,1-1.366-1.366V1.367H12.021V14.754a2.715,2.715,0,0,0,.367,1.366Z"
                            transform="translate(0 -0.001)" fill="#6f4ef6" />
                          <path id="Path_30" data-name="Path 30"
                            d="M213.767,237h-2.083a.683.683,0,0,0,0,1.366h2.083a.683.683,0,1,0,0-1.366Z"
                            transform="translate(-203.795 -228.906)" fill="#6f4ef6" />
                          <path id="Path_31" data-name="Path 31"
                            d="M213.767,315h-2.083a.683.683,0,1,0,0,1.366h2.083a.683.683,0,1,0,0-1.366Z"
                            transform="translate(-203.795 -304.243)" fill="#6f4ef6" />
                        </g>
                      </g>
                    </svg>Reports
                  </a>
                  <ul>
                    <li><a href="transection.html">Transection</a></li>
                    <li><a href="accountsbalance.html">Account Balance</a></li>
                    <li><a href="incomereport.html">Income</a></li>
                    <li><a href="expensereport.html">Expense</a></li>
                    <li><a href="trialbalance.html">Trial Balance</a></li>
                    <li><a href="profitreport.html">Income vs Expense</a></li>
                    <li><a href="netincomereport.html">Profit & Loss</a></li>
                    <li><a href="balancesheet.html">Balance Sheet</a></li>
                  </ul>
                </li>
                <li><a href="company.html">
                    <svg id="my-business_2" xmlns="http://www.w3.org/2000/svg" width="17.999" height="15.89"
                      viewBox="0 0 17.999 15.89">
                      <path id="Path_10_2" data-name="Path 10"
                        d="M15.737,30H2.262L0,36.476v.617A2.643,2.643,0,0,0,1.055,39.2V45.89h15.89V39.2A2.643,2.643,0,0,0,18,37.093v-.617Zm.992,6.038h-3.05l-.87-4.983h2.18ZM1.055,37.093H4.236a1.591,1.591,0,1,1-3.182,0Zm7.418,0a1.591,1.591,0,1,1-3.182,0ZM5.391,36.038l.87-4.983H8.472v4.983Zm4.136,0V31.055h2.211l.87,4.983Zm3.182,1.055a1.591,1.591,0,1,1-3.182,0Zm-9.7-6.038h2.18l-.87,4.983H1.27ZM15.89,44.836H2.109V39.683a2.645,2.645,0,0,0,2.654-1.008,2.643,2.643,0,0,0,4.236,0,2.643,2.643,0,0,0,4.236,0,2.645,2.645,0,0,0,2.654,1.008Zm-.536-6.152a1.593,1.593,0,0,1-1.591-1.591h3.182A1.593,1.593,0,0,1,15.354,38.683Z"
                        transform="translate(0 -30)" fill="#6f4ef6" />
                    </svg>Company
                  </a></li>
                <li><a href="rolepermission.html">
                    <svg id="support" xmlns="http://www.w3.org/2000/svg" width="17.755" height="17.754"
                      viewBox="0 0 17.755 17.754">
                      <g id="Group_13" data-name="Group 13" transform="translate(0 0)">
                        <g id="Group_12" data-name="Group 12">
                          <path id="Path_34" data-name="Path 34"
                            d="M12.526,9.6,11.452,8.522l2.84-2.84.368.368a.52.52,0,0,0,.814-.1L17.68,2.272a.52.52,0,0,0-.078-.635L16.131.165A.52.52,0,0,0,15.5.087L11.817,2.294a.52.52,0,0,0-.1.814l.368.368-2.84,2.84L8.17,5.241A4.149,4.149,0,0,0,2.185.514a.52.52,0,0,0-.121.826L4.015,3.292a.52.52,0,1,1-.736.736L1.328,2.076A.52.52,0,0,0,.5,2.2,4.149,4.149,0,0,0,5.228,8.183l.339.339-4.8,4.8A2.6,2.6,0,0,0,4.441,17l4.8-4.8.339.339a4.149,4.149,0,0,0,5.986,4.726.52.52,0,0,0,.121-.826l-1.952-1.952a.52.52,0,1,1,.736-.736L16.427,15.7a.52.52,0,0,0,.826-.121A4.149,4.149,0,0,0,12.526,9.6Zm3.156-8.409.9.9L14.924,4.843l-2-2ZM12.821,4.211l.736.736-2.84,2.84-.736-.736ZM3.705,16.269A1.561,1.561,0,0,1,1.5,14.062l4.8-4.8L8.51,11.464Zm12.9-1.856-1.4-1.4A1.56,1.56,0,1,0,13,15.223l1.4,1.4a3.081,3.081,0,0,1-3-.8,3.138,3.138,0,0,1-.733-3.256.52.52,0,0,0-.122-.542l-4.8-4.8A.52.52,0,0,0,5.2,7.1,3.138,3.138,0,0,1,1.944,6.37a3.081,3.081,0,0,1-.8-3l1.4,1.4A1.56,1.56,0,0,0,4.751,2.557l-1.4-1.4a3.081,3.081,0,0,1,3,.8,3.138,3.138,0,0,1,.733,3.256.52.52,0,0,0,.122.542l4.8,4.8a.52.52,0,0,0,.542.122,3.138,3.138,0,0,1,3.256.733A3.081,3.081,0,0,1,16.608,14.413Z"
                            transform="translate(0 -0.013)" fill="#6f4ef6" />
                        </g>
                      </g>
                      <g id="Group_15" data-name="Group 15" transform="translate(2.697 10.943)">
                        <g id="Group_14" data-name="Group 14">
                          <path id="Path_35" data-name="Path 35"
                            d="M81.834,315.744a.52.52,0,0,0-.736,0l-3.178,3.178a.52.52,0,0,0,.736.736l3.178-3.179A.52.52,0,0,0,81.834,315.744Z"
                            transform="translate(-77.767 -315.591)" fill="#6f4ef6" />
                        </g>
                      </g>
                    </svg>Administrative Tools
                  </a></li>
              </ul>
            </div>

            <div
              class="cashier-logo text-center h-[200px] w-full flex flex-col justify-center items-center bg-[#F6F8FC] rounded-lg mt-[10px]">
              <a href="dashboard.html" class="inline-block"><img src="assets/img/logo/logo.png"
                  alt="logo not found"></a>
            </div>
          </div>
        </div>
        <div class="cashier-menu-overlay cashier-menu-overlay-dashboard"></div>
      </div>
      <div class=" cashier-dashboard-main">
        <div class=" cashier-header-area">
          <div
            class="cashier-header-wrapper custom-height-70 px-7 custom-height-70 bg-white border-b border-solid border-grayBorder">
            <div class="grid grid-cols-12 items-center h-full">
              <div class="col-span-12">
                <!-- header area start here -->
                <div class="cashier-header-content flex items-center justify-between custom-height-70">
                  <div class="cashier-header-breadcrumb">
                    <h5 class="text-[20px] text-heading font-bold mb-1 leading-none">Biller</h5>
                    <ul>
                      <li class="text-[14px] text-bodyText font-normal inline-block mr-2">People
                      </li>
                      <li class="text-[12px] text-bodyText font-normal inline-block mr-2 translate-y-0">
                        <i class="far fa-chevron-right"></i>
                      </li>
                      <li class="text-[14px] text-bodyText font-normal inline-block mr-2">
                        Biller</li>
                    </ul>
                  </div>
                  <div class="flex items-center">
                    <div
                      class="cashier-header-shortmenu pr-5 maxSm:pr-4 items-center flex flex-col justify-center custom-height-70">
                      <a id="shortmenu" href="javascript:void(0)"
                        class="h-10 w-10 leading-[38px] border border-grayBorder border-solid text-center inline-block rounded-[3px] text-bodyText short">
                        <i class="fal fa-plus"></i>
                      </a>
                      <div class="cashier-quick-dropdown cashier-quick-menu-dropdown">
                        <ul>
                          <li><a href="createbank.html">Add Bank</a></li>
                          <li><a href="balancetransfer.html">Create Transfer</a></li>
                          <li><a href="createledger.html">Create Ledger</a></li>
                          <li><a href="addbill.html">Add Vendor Bill</a></li>
                          <li><a href="customerbill.html">Add Customer Bill</a></li>
                          <li><a href="adduser.html">Add User</a></li>
                        </ul>
                      </div>
                    </div>
                    <div id="sidebarToggle" class="cashier-header-bar-responsive cursor-pointer mr-5">
                      <svg xmlns="http://www.w3.org/2000/svg" width="23.094" height="16.166"
                        viewBox="0 0 23.094 16.166">
                        <path id="menu"
                          d="M5.774,77.955A1.155,1.155,0,0,1,6.928,76.8H21.939a1.155,1.155,0,1,1,0,2.309H6.928A1.155,1.155,0,0,1,5.774,77.955Zm16.166,5.773H1.155a1.155,1.155,0,1,0,0,2.309H21.939a1.155,1.155,0,1,0,0-2.309Zm0,6.928H11.547a1.155,1.155,0,1,0,0,2.309H21.939a1.155,1.155,0,1,0,0-2.309Z"
                          transform="translate(0 -76.8)" fill="#616161" />
                      </svg>
                    </div>
                    <div
                      class="cashier-header-notify-wrapper px-5 flex items-center border-l border-solid border-grayBorder custom-height-70 pr-0">
                      <div class="cashier-header-notification pr-5 relative">
                        <a id="notifydropdown" href="javascript:void(0)" class="noti">
                          <svg id="bell" xmlns="http://www.w3.org/2000/svg" width="20.338" height="22.469"
                            viewBox="0 0 20.338 22.469">
                            <path id="Path_47" data-name="Path 47"
                              d="M42.168,14.7a.583.583,0,0,1-.583-.583V10a7.27,7.27,0,0,0-5.1-6.928,2.295,2.295,0,1,0-4.322,0A7.269,7.269,0,0,0,27.072,10v4.116a.583.583,0,0,1-.583.583,2.33,2.33,0,0,0,0,4.66h5.435a2.484,2.484,0,1,0,4.808,0h5.435a2.33,2.33,0,0,0,0-4.66ZM33.357,2.3a.972.972,0,1,1,1.809.5,7.237,7.237,0,0,0-1.672,0,.965.965,0,0,1-.137-.5ZM35.49,19.985a1.161,1.161,0,1,1-2.137-.628h1.953A1.153,1.153,0,0,1,35.49,19.985Zm6.678-1.951H26.49a1.006,1.006,0,0,1,0-2.013A1.908,1.908,0,0,0,28.4,14.115V10a5.933,5.933,0,0,1,11.866,0v4.116a1.908,1.908,0,0,0,1.906,1.906,1.006,1.006,0,0,1,0,2.013Z"
                              transform="translate(-24.16 0)" fill="#616161" />
                          </svg>
                        </a>
                        <div class="cashier-notify-dropdown cashier-notification-dropdown">
                          <div class="cashier-notify-dropdown-wrapper px-4 border border-grayBorder border-solid">
                            <div
                              class="cashier-notify-dropdown-list py-4 flex items-center border-b border-grayBorder border-solid">
                              <div class="cashier-notify-img">
                                <a href="message.html"><img src="assets/img/user/user-1.png"
                                    alt="img not found"></a>
                              </div>
                              <div class="cashier-notify-text">
                                <h6><a href="message.html">Alex Send you
                                    Message</a></h6>
                                <span>31 Dec 2021 - 02:26 PM</span>
                              </div>
                            </div>
                            <div
                              class="cashier-notify-dropdown-list py-4 flex items-center border-b border-grayBorder border-solid">
                              <div class="cashier-notify-img">
                                <a href="message.html"><img src="assets/img/user/user-2.png"
                                    alt="img not found"></a>
                              </div>
                              <div class="cashier-notify-text">
                                <h6><a href="message.html">Peter Send you
                                    Message</a></h6>
                                <span>31 Dec 2021 - 08:36 PM</span>
                              </div>
                            </div>
                            <div
                              class="cashier-notify-dropdown-list py-4 flex items-center border-b border-grayBorder border-solid">
                              <div class="cashier-notify-img">
                                <a href="message.html"><img src="assets/img/user/user-3.png"
                                    alt="img not found"></a>
                              </div>
                              <div class="cashier-notify-text">
                                <h6><a href="message.html">Resport created
                                    successfully</a></h6>
                                <span>31 Dec 2021 - 04:45 PM</span>
                              </div>
                            </div>
                            <div
                              class="cashier-notify-dropdown-list py-4 flex items-center border-b border-grayBorder border-solid">
                              <div class="cashier-notify-img">
                                <a href="message.html"><img src="assets/img/user/user-4.png"
                                    alt="img not found"></a>
                              </div>
                              <div class="cashier-notify-text">
                                <h6><a href="message.html">Jhon Send you
                                    Message</a></h6>
                                <span>31 Dec 2021 - 07:30 AM</span>
                              </div>
                            </div>
                            <div class="cashier-notify-dropdown-list py-4 flex items-center justify-center">
                              <a href="message.html" class="text-[14px] text-bodyText inline-block">See all
                                <i class="fa-light fa-arrow-right"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="cashier-header-email pr-5 relative">
                        <a id="emaildropdown" href="javascript:void(0)" class="emai">
                          <svg id="Layer_3" data-name="Layer 3" xmlns="http://www.w3.org/2000/svg" width="20.796"
                            height="16.637" viewBox="0 0 20.796 16.637">
                            <path id="Path_49" data-name="Path 49"
                              d="M19.239,4H3.557A2.56,2.56,0,0,0,1,6.557V18.08a2.56,2.56,0,0,0,2.557,2.557H19.239A2.56,2.56,0,0,0,21.8,18.08V6.557A2.56,2.56,0,0,0,19.239,4ZM3.557,5.386H19.239A1.172,1.172,0,0,1,20.41,6.557v.53L11.4,12.881,2.386,7.088v-.53A1.172,1.172,0,0,1,3.557,5.386ZM19.239,19.251H3.557A1.172,1.172,0,0,1,2.386,18.08V8.736l8.637,5.552a.693.693,0,0,0,.75,0L20.41,8.736V18.08a1.172,1.172,0,0,1-1.171,1.171Z"
                              transform="translate(-1 -4)" fill="#616161" />
                          </svg>
                        </a>
                        <div class="cashier-notify-dropdown cashier-email-dropdown">
                          <div class="cashier-notify-dropdown-wrapper px-4 border border-grayBorder border-solid">
                            <div
                              class="cashier-notify-dropdown-list py-4 flex items-center border-b border-grayBorder border-solid">
                              <div class="cashier-notify-img">
                                <a href="email.html"><img src="assets/img/user/user-1.png"
                                    alt="img not found"></a>
                              </div>
                              <div class="cashier-notify-text">
                                <h6><a href="email.html">Alex Send you
                                    Message</a></h6>
                                <span>31 Dec 2021 - 02:26 PM</span>
                              </div>
                            </div>
                            <div
                              class="cashier-notify-dropdown-list py-4 flex items-center border-b border-grayBorder border-solid">
                              <div class="cashier-notify-img">
                                <a href="email.html"><img src="assets/img/user/user-2.png"
                                    alt="img not found"></a>
                              </div>
                              <div class="cashier-notify-text">
                                <h6><a href="email.html">Peter Send you
                                    Message</a></h6>
                                <span>31 Dec 2021 - 08:36 PM</span>
                              </div>
                            </div>
                            <div
                              class="cashier-notify-dropdown-list py-4 flex items-center border-b border-grayBorder border-solid">
                              <div class="cashier-notify-img">
                                <a href="email.html"><img src="assets/img/user/user-3.png"
                                    alt="img not found"></a>
                              </div>
                              <div class="cashier-notify-text">
                                <h6><a href="email.html">Resport created
                                    successfully</a></h6>
                                <span>31 Dec 2021 - 04:45 PM</span>
                              </div>
                            </div>
                            <div
                              class="cashier-notify-dropdown-list py-4 flex items-center border-b border-grayBorder border-solid">
                              <div class="cashier-notify-img">
                                <a href="email.html"><img src="assets/img/user/user-4.png"
                                    alt="img not found"></a>
                              </div>
                              <div class="cashier-notify-text">
                                <h6><a href="email.html">Jhon Send you
                                    Message</a></h6>
                                <span>31 Dec 2021 - 07:30 AM</span>
                              </div>
                            </div>
                            <div class="cashier-notify-dropdown-list py-4 flex items-center justify-center">
                              <a href="email.html" class="text-[14px] text-bodyText inline-block">See all
                                <i class="fa-light fa-arrow-right"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div id="langdropdown" class="cashier-header-language flex items-center relative">
                        <div class="cashier-header-language-content">
                          <ul>
                            <li class="flex "><a href="javascript:void(0)"
                                class="text-[14px] text-bodyText translate-y-[2px] font-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18.988" height="20.88"
                                  viewBox="0 0 18.988 20.88">
                                  <g id="setting_3_" data-name="setting (3)" transform="translate(-1.684 -0.656)">
                                    <path id="Path_5774" data-name="Path 5774"
                                      d="M11.7,8.25A3.451,3.451,0,1,0,15.152,11.7,3.451,3.451,0,0,0,11.7,8.25ZM9.63,11.7A2.071,2.071,0,1,1,11.7,13.772,2.071,2.071,0,0,1,9.63,11.7Z"
                                      transform="translate(-0.523 -0.605)" fill="#616161" fill-rule="evenodd" />
                                    <path id="Path_5775" data-name="Path 5775"
                                      d="M14.32,3.027a3.268,3.268,0,0,0-6.285,0A1.888,1.888,0,0,1,5.761,4.34,3.268,3.268,0,0,0,2.619,9.783a1.888,1.888,0,0,1,0,2.626,3.268,3.268,0,0,0,3.143,5.443,1.888,1.888,0,0,1,2.274,1.313,3.268,3.268,0,0,0,6.285,0,1.888,1.888,0,0,1,2.274-1.313,3.268,3.268,0,0,0,3.143-5.443,1.888,1.888,0,0,1,0-2.626A3.268,3.268,0,0,0,16.594,4.34,1.888,1.888,0,0,1,14.32,3.027Zm-4.958.379a1.888,1.888,0,0,1,3.63,0A3.268,3.268,0,0,0,16.93,5.679a1.888,1.888,0,0,1,1.815,3.144,3.268,3.268,0,0,0,0,4.546,1.888,1.888,0,0,1-1.815,3.144,3.268,3.268,0,0,0-3.937,2.273,1.888,1.888,0,0,1-3.63,0,3.268,3.268,0,0,0-3.937-2.273A1.888,1.888,0,0,1,3.61,13.369a3.268,3.268,0,0,0,0-4.546A1.888,1.888,0,0,1,5.425,5.679,3.268,3.268,0,0,0,9.363,3.406Z"
                                      transform="translate(0 0)" fill="#616161" fill-rule="evenodd" />
                                  </g>
                                </svg>
                              </a></li>
                          </ul>
                        </div>
                        <div class="cashier-quick-dropdown cashier-quick-lang-dropdown">
                          <ul class="lang-dropdown-wrapper">
                            <li><a href="profile.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="15.186"
                                  viewBox="0 0 17 15.186">
                                  <g id="users" transform="translate(-0.001 -25.494)">
                                    <g id="Group_2756" data-name="Group 2756" transform="translate(0.001 25.494)">
                                      <path id="Path_5776" data-name="Path 5776"
                                        d="M13.783,32.893A4.242,4.242,0,0,0,8.5,26.271a4.244,4.244,0,0,0-5.285,6.623A6.03,6.03,0,0,0,0,38.251v1.821a.607.607,0,0,0,.607.607H16.394A.607.607,0,0,0,17,40.073V38.251A6.03,6.03,0,0,0,13.783,32.893Zm-2.854-6.178a3.031,3.031,0,0,1,1.248,5.8c-.047.021-.093.041-.141.061a2.976,2.976,0,0,1-.462.144c-.03.007-.061.01-.092.016a3.037,3.037,0,0,1-.534.054c-.081,0-.162-.006-.243-.013a.459.459,0,0,1-.091-.006,3.067,3.067,0,0,1-.993-.293c-.012-.005-.025,0-.036-.01-.061-.029-.121-.055-.175-.087,0-.006.008-.013.013-.019a4.259,4.259,0,0,0,.65-1.185l.019-.051a4.283,4.283,0,0,0,.161-.625c.005-.031.01-.061.015-.094a3.876,3.876,0,0,0,0-1.3c0-.032-.009-.061-.015-.094a4.284,4.284,0,0,0-.161-.625l-.019-.051a4.26,4.26,0,0,0-.65-1.185c0-.006-.008-.013-.013-.019A3.016,3.016,0,0,1,10.929,26.716ZM3.036,29.751A3.028,3.028,0,0,1,8.16,27.558c.035.034.07.068.1.1a3.121,3.121,0,0,1,.288.349c.027.038.051.078.076.117a2.987,2.987,0,0,1,.223.41c.015.035.027.07.04.1a2.968,2.968,0,0,1,.151.486c0,.018.005.036.009.055a2.858,2.858,0,0,1,0,1.143c0,.019,0,.037-.009.055a2.961,2.961,0,0,1-.151.486c-.013.035-.025.07-.04.1a3,3,0,0,1-.223.409c-.025.039-.049.079-.076.117a3.114,3.114,0,0,1-.288.349c-.034.035-.069.069-.1.1a3.031,3.031,0,0,1-.838.566c-.049.022-.1.043-.149.061a3.054,3.054,0,0,1-.45.14c-.038.009-.078.013-.117.02a3.012,3.012,0,0,1-.5.05H6.039a3.008,3.008,0,0,1-.5-.05c-.039-.007-.078-.012-.117-.02a3.052,3.052,0,0,1-.45-.14l-.149-.061A3.035,3.035,0,0,1,3.036,29.751Zm7.893,9.714H1.215V38.251a4.827,4.827,0,0,1,3.229-4.575,4.237,4.237,0,0,0,3.257,0,4.878,4.878,0,0,1,.591.262c.126.065.243.139.364.214.079.049.159.1.235.151.117.083.228.174.336.267.07.061.139.121.2.182.1.095.194.195.285.3.065.074.128.149.188.227.08.1.155.206.226.314.061.091.115.186.168.281s.117.209.168.318.1.228.14.344c.038.1.079.2.11.3.043.141.072.287.1.432.018.086.042.171.055.258a5.022,5.022,0,0,1,.055.726v1.214Zm4.857,0H12.144V38.251c0-.19-.011-.378-.028-.565,0-.055-.013-.109-.019-.163-.016-.134-.035-.267-.061-.4q-.016-.084-.035-.169-.044-.2-.1-.4c-.013-.044-.024-.088-.038-.131a6.016,6.016,0,0,0-.732-1.534l-.024-.035q-.157-.233-.335-.45l0-.005a5.511,5.511,0,0,0-.392-.435H10.4a4.3,4.3,0,0,0,.517.036h.033a4.294,4.294,0,0,0,.478-.031c.05-.006.1-.015.149-.023q.194-.03.383-.077l.109-.028a4.134,4.134,0,0,0,.486-.165,4.827,4.827,0,0,1,3.231,4.577v1.214Z"
                                        transform="translate(-0.001 -25.494)" fill="#616161" />
                                    </g>
                                  </g>
                                </svg>Edit Profile
                              </a></li>
                            <li><a href="rolepermission.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16.665"
                                  viewBox="0 0 17 16.665">
                                  <g id="setting-lines" transform="translate(0 -4.503)">
                                    <path id="Path_5791" data-name="Path 5791"
                                      d="M3.633,53.587H.5a.5.5,0,0,1,0-1H3.633a.5.5,0,0,1,0,1Z"
                                      transform="translate(0 -46.294)" fill="#616161" />
                                    <path id="Path_5792" data-name="Path 5792"
                                      d="M86.426,9.083a2.29,2.29,0,1,1,2.29-2.29A2.293,2.293,0,0,1,86.426,9.083Zm0-3.58a1.29,1.29,0,1,0,1.29,1.29A1.292,1.292,0,0,0,86.426,5.5Z"
                                      transform="translate(-81.003)" fill="#616161" />
                                    <path id="Path_5793" data-name="Path 5793"
                                      d="M236.978,53.587h-7.473a.5.5,0,1,1,0-1h7.473a.5.5,0,0,1,0,1Z"
                                      transform="translate(-220.478 -46.294)" fill="#616161" />
                                    <path id="Path_5794" data-name="Path 5794"
                                      d="M266.719,171.354a2.29,2.29,0,1,1,2.29-2.29A2.293,2.293,0,0,1,266.719,171.354Zm0-3.58a1.29,1.29,0,1,0,1.29,1.29A1.292,1.292,0,0,0,266.719,167.774Z"
                                      transform="translate(-254.583 -156.229)" fill="#616161" />
                                    <path id="Path_5795" data-name="Path 5795"
                                      d="M8.532,215.85H.5a.5.5,0,0,1,0-1H8.532a.5.5,0,0,1,0,1Z"
                                      transform="translate(0 -202.515)" fill="#616161" />
                                    <path id="Path_5796" data-name="Path 5796"
                                      d="M363.66,215.85h-2.573a.5.5,0,0,1,0-1h2.573a.5.5,0,0,1,0,1Z"
                                      transform="translate(-347.16 -202.515)" fill="#616161" />
                                    <path id="Path_5797" data-name="Path 5797"
                                      d="M71.4,333.618a2.29,2.29,0,1,1,2.29-2.29A2.293,2.293,0,0,1,71.4,333.618Zm0-3.58a1.29,1.29,0,1,0,1.29,1.29A1.292,1.292,0,0,0,71.4,330.037Z"
                                      transform="translate(-66.54 -312.45)" fill="#616161" />
                                    <path id="Path_5798" data-name="Path 5798"
                                      d="M222.511,378.114h-8.032a.5.5,0,1,1,0-1h8.032a.5.5,0,1,1,0,1Z"
                                      transform="translate(-206.011 -358.737)" fill="#616161" />
                                    <path id="Path_5799" data-name="Path 5799"
                                      d="M3.073,378.113H.5a.5.5,0,0,1,0-1H3.073a.5.5,0,0,1,0,1Z"
                                      transform="translate(0 -358.736)" fill="#616161" />
                                  </g>
                                </svg>Appearance
                              </a></li>
                            <li><a href="javascript:void(0)" class="relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
                                  <path id="world-wide-web"
                                    d="M16.529,11.3a8.5,8.5,0,0,0,0-5.593.612.612,0,0,0-.027-.077,8.5,8.5,0,0,0-16,0A.6.6,0,0,0,.475,5.7a8.5,8.5,0,0,0,0,5.593.612.612,0,0,0,.027.077,8.5,8.5,0,0,0,16,0A.607.607,0,0,0,16.529,11.3ZM8.5,15.782c-.324,0-.846-.586-1.282-1.895a13.344,13.344,0,0,1-.5-2.147h3.568a13.355,13.355,0,0,1-.5,2.147C9.348,15.2,8.826,15.782,8.5,15.782ZM6.57,10.521c-.059-.65-.09-1.327-.09-2.021s.031-1.371.09-2.021h3.863c.059.65.09,1.327.09,2.021s-.031,1.371-.09,2.021ZM1.22,8.5a7.261,7.261,0,0,1,.286-2.021H5.348c-.057.663-.086,1.343-.086,2.021s.029,1.358.086,2.021H1.506A7.261,7.261,0,0,1,1.22,8.5ZM8.5,1.218c.324,0,.846.586,1.282,1.895a13.345,13.345,0,0,1,.5,2.147H6.718a13.343,13.343,0,0,1,.5-2.147C7.656,1.8,8.178,1.218,8.5,1.218Zm3.154,5.261H15.5a7.294,7.294,0,0,1,0,4.042H11.656c.057-.663.086-1.343.086-2.021S11.713,7.142,11.656,6.479Zm3.366-1.218H11.516a11.694,11.694,0,0,0-1.11-3.789A7.313,7.313,0,0,1,15.022,5.261ZM6.6,1.472a11.694,11.694,0,0,0-1.11,3.789H1.982A7.314,7.314,0,0,1,6.6,1.472ZM1.982,11.74H5.488A11.7,11.7,0,0,0,6.6,15.529,7.313,7.313,0,0,1,1.982,11.74Zm8.424,3.789a11.694,11.694,0,0,0,1.11-3.789h3.506A7.313,7.313,0,0,1,10.406,15.529Z"
                                    transform="translate(-0.002)" fill="#616161" />
                                </svg>Language
                              </a>
                              <ul class="lang-sub-down">
                                <li><a href="javascript:void(0)">English</a></li>
                                <li><a href="javascript:void(0)">Spanish</a></li>
                                <li><a href="javascript:void(0)">Chinese</a></li>
                              </ul>
                            </li>
                            <li><a href="index.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16.944"
                                  viewBox="0 0 17 16.944">
                                  <g id="logout_1_" data-name="logout (1)" transform="translate(0 -0.85)">
                                    <g id="Group_2761" data-name="Group 2761" transform="translate(0 0.85)">
                                      <g id="Group_2760" data-name="Group 2760">
                                        <path id="Path_5777" data-name="Path 5777"
                                          d="M8.472,16.382H2.118a.706.706,0,0,1-.706-.706V2.968a.706.706,0,0,1,.706-.706H8.472a.706.706,0,0,0,0-1.412H2.118A2.121,2.121,0,0,0,0,2.968V15.676a2.121,2.121,0,0,0,2.118,2.118H8.472a.706.706,0,1,0,0-1.412Z"
                                          transform="translate(0 -0.85)" fill="#616161" />
                                      </g>
                                    </g>
                                    <g id="Group_2763" data-name="Group 2763" transform="translate(5.648 4.38)">
                                      <g id="Group_2762" data-name="Group 2762">
                                        <path id="Path_5778" data-name="Path 5778"
                                          d="M181.242,111.6l-4.292-4.236a.706.706,0,1,0-.991,1.005l3.067,3.027h-8.22a.706.706,0,0,0,0,1.412h8.22l-3.067,3.027a.706.706,0,1,0,.991,1.005l4.292-4.236a.706.706,0,0,0,0-1.005Z"
                                          transform="translate(-170.1 -107.165)" fill="#616161" />
                                      </g>
                                    </g>
                                  </g>
                                </svg>Logout
                              </a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cashier-header-overlay">
                </div>
                <div class="cashier-header-overlay"></div>
                <div class="cashier-header-overlay"></div>
                <div class="cashier-header-overlay">
                </div>
                <div class="cashier-header-overlay">
                </div>
                <!-- header area end here -->
              </div>
            </div>
          </div>
        </div>
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
              <button class="mb-1 open">
                <i class="fa-light fa-plus"></i> Add Biller
              </button>
              <div class="mb-1 btn-primary button">
                <i class="fa-light fa-folder-plus"></i>
                <span class="cashier-input-field-style relative inline-block">
                  <span class="cashier-input-field-file">
                    <input type="file" id="fileUpload">
                    <label for="fileUpload">Import Biller</label>
                  </span>
                </span>
              </div>
            </div>
            <div class="cashier-table-header-search-area">
              <div class="grid grid-cols-12 gap-x-5 mb-7 pb-0.5">
                <div class="md:col-span-6 col-span-12">
                  <div class="cashier-table-header-search relative maxSm:mb-4">
                    <input type="text" placeholder="Search List">
                    <span>
                      <i class="fa-light fa-magnifying-glass"></i>
                    </span>
                  </div>
                </div>
                <div class="md:col-span-6 col-span-12">
                  <div class="cashier-table-header-search-action-btn text-right maxSm:text-left">

                    <div class="dropdown">
                      <button class="filter">
                        <svg id="filter" xmlns="http://www.w3.org/2000/svg" width="15.766" height="13.34"
                          viewBox="0 0 15.766 13.34">
                          <path id="Path_196" data-name="Path 196"
                            d="M18.159,6.213H9.67A1.214,1.214,0,0,0,8.457,5H7.245A1.214,1.214,0,0,0,6.032,6.213H3.606a.606.606,0,1,0,0,1.213H6.032A1.214,1.214,0,0,0,7.245,8.638H8.457A1.214,1.214,0,0,0,9.67,7.426h8.489a.606.606,0,1,0,0-1.213ZM7.245,7.426V6.213H8.457v.6s0,0,0,0,0,0,0,0v.6Z"
                            transform="translate(-3 -5)" fill="#611bcb" />
                          <path id="Path_197" data-name="Path 197"
                            d="M18.159,14.213H14.521A1.214,1.214,0,0,0,13.308,13H12.1a1.214,1.214,0,0,0-1.213,1.213H3.606a.606.606,0,1,0,0,1.213h7.277A1.214,1.214,0,0,0,12.1,16.638h1.213a1.214,1.214,0,0,0,1.213-1.213h3.638a.606.606,0,1,0,0-1.213ZM12.1,15.426V14.213h1.213v.6s0,0,0,0,0,0,0,0v.6Z"
                            transform="translate(-3 -8.149)" fill="#611bcb" />
                          <path id="Path_198" data-name="Path 198"
                            d="M18.159,22.213H9.67A1.214,1.214,0,0,0,8.457,21H7.245a1.214,1.214,0,0,0-1.213,1.213H3.606a.606.606,0,0,0,0,1.213H6.032a1.214,1.214,0,0,0,1.213,1.213H8.457A1.214,1.214,0,0,0,9.67,23.426h8.489a.606.606,0,0,0,0-1.213ZM7.245,23.426V22.213H8.457v.6s0,0,0,0,0,0,0,0v.6Z"
                            transform="translate(-3 -11.298)" fill="#611bcb" />
                        </svg> Filter
                      </button>
                      <div class="dropdown-list">
                        <button class="dropdown-menu-item">
                          <span>Date</span>
                        </button>
                        <button class="dropdown-menu-item">
                          <span>Customer</span>
                        </button>
                        <button class="dropdown-menu-item">
                          <span>Warehouse</span>
                        </button>
                        <button class="dropdown-menu-item">
                          <span>Biller</span>
                        </button>
                      </div>
                    </div>

                    <button type="button" class="pdf"><svg id="pdf-file" xmlns="http://www.w3.org/2000/svg"
                        width="19.027" height="19.72" viewBox="0 0 19.027 19.72">
                        <path id="Path_188" data-name="Path 188"
                          d="M82.8,209H81.578a.578.578,0,0,0-.578.58l.009,4.389a.578.578,0,1,0,1.155,0v-1.333l.636,0a1.817,1.817,0,1,0,0-3.634Zm0,2.478-.639,0c0-.246,0-.511,0-.664,0-.131,0-.4,0-.661H82.8a.662.662,0,1,1,0,1.323Z"
                          transform="translate(-78.227 -200.95)" fill="#ff9720" />
                        <path id="Path_189" data-name="Path 189"
                          d="M210.784,209h-1.207a.578.578,0,0,0-.578.579s.009,4.246.009,4.262a.578.578,0,0,0,.578.576h0c.036,0,.9,0,1.241-.009a2.449,2.449,0,0,0,2.253-2.7C213.083,210.088,212.159,209,210.784,209Zm.025,4.251c-.15,0-.407,0-.647.006,0-.5,0-2.581-.006-3.1h.628c1.06,0,1.143,1.188,1.143,1.553C211.927,212.467,211.582,213.238,210.81,213.251Z"
                          transform="translate(-201.297 -200.95)" fill="#ff9720" />
                        <path id="Path_190" data-name="Path 190"
                          d="M355.344,209a.578.578,0,1,0,0-1.155h-1.766a.578.578,0,0,0-.578.578v4.358a.578.578,0,0,0,1.155,0v-1.643H355.2a.578.578,0,1,0,0-1.155h-1.048V209Z"
                          transform="translate(-339.75 -199.837)" fill="#ff9720" />
                        <path id="Path_191" data-name="Path 191"
                          d="M26.294,5.585H25.87V5.42a2.877,2.877,0,0,0-.792-1.987L22.678.9a2.9,2.9,0,0,0-2.1-.9H12.89a1.735,1.735,0,0,0-1.733,1.733V5.585h-.424A1.735,1.735,0,0,0,9,7.318v6.933a1.735,1.735,0,0,0,1.733,1.733h.424v2A1.735,1.735,0,0,0,12.89,19.72H24.137a1.735,1.735,0,0,0,1.733-1.733v-2h.424a1.735,1.735,0,0,0,1.733-1.733V7.318A1.735,1.735,0,0,0,26.294,5.585ZM12.312,1.733a.578.578,0,0,1,.578-.578h7.691a1.74,1.74,0,0,1,1.258.541l2.4,2.531a1.726,1.726,0,0,1,.475,1.192v.165h-12.4Zm12.4,16.254a.578.578,0,0,1-.578.578H12.89a.578.578,0,0,1-.578-.578v-2h12.4Zm2.157-3.736a.578.578,0,0,1-.578.578H10.733a.578.578,0,0,1-.578-.578V7.318a.578.578,0,0,1,.578-.578h15.56a.578.578,0,0,1,.578.578Z"
                          transform="translate(-9 0)" fill="#ff9720" />
                      </svg>
                    </button>
                    <button type="button" class="csv"><svg id="csv" xmlns="http://www.w3.org/2000/svg" width="18.105"
                        height="18.105" viewBox="0 0 18.105 18.105">
                        <path id="Path_184" data-name="Path 184"
                          d="M16.514,8.558h-.566V4.774a.535.535,0,0,0-.155-.375h0L11.55.155A.535.535,0,0,0,11.174,0H3.748A1.593,1.593,0,0,0,2.157,1.591V8.558H1.591A1.593,1.593,0,0,0,0,10.149v6.365a1.593,1.593,0,0,0,1.591,1.591H16.514a1.593,1.593,0,0,0,1.591-1.591V10.149A1.593,1.593,0,0,0,16.514,8.558ZM11.7,1.811l2.432,2.432h-1.9a.531.531,0,0,1-.53-.53Zm-8.487-.22a.531.531,0,0,1,.53-.53h6.9V3.713A1.593,1.593,0,0,0,12.235,5.3h2.652V8.558H3.218ZM17.045,16.514a.531.531,0,0,1-.53.53H1.591a.531.531,0,0,1-.53-.53V10.149a.531.531,0,0,1,.53-.53H16.514a.531.531,0,0,1,.53.53Z"
                          transform="translate(0 0)" fill="#27db8d" />
                        <path id="Path_185" data-name="Path 185"
                          d="M92.591,303.061a.531.531,0,0,1,.53.53.53.53,0,1,0,1.061,0,1.591,1.591,0,0,0-3.183,0v2.122a1.591,1.591,0,1,0,3.183,0,.53.53,0,0,0-1.061,0,.53.53,0,1,1-1.061,0v-2.122A.531.531,0,0,1,92.591,303.061Z"
                          transform="translate(-87.782 -291.321)" fill="#27db8d" />
                        <path id="Path_186" data-name="Path 186"
                          d="M212.591,304.122a.53.53,0,1,1,.375-.906.53.53,0,0,0,.75-.75,1.591,1.591,0,1,0-1.125,2.717.53.53,0,1,1-.375.906.53.53,0,1,0-.75.75,1.591,1.591,0,1,0,1.125-2.717Z"
                          transform="translate(-203.539 -291.321)" fill="#27db8d" />
                        <path id="Path_187" data-name="Path 187"
                          d="M333.778,302.013a.531.531,0,0,0-.643.386l-.546,2.185-.546-2.185a.53.53,0,1,0-1.029.257l1.061,4.243a.53.53,0,0,0,1.029,0l1.061-4.243A.53.53,0,0,0,333.778,302.013Z"
                          transform="translate(-319.293 -291.317)" fill="#27db8d" />
                      </svg>
                    </button>
                    <button type="button" class="printer"><svg id="printer" xmlns="http://www.w3.org/2000/svg"
                        width="19.26" height="19.26" viewBox="0 0 19.26 19.26">
                        <path id="Path_192" data-name="Path 192"
                          d="M16.439,4.853h-.527V2.821A2.824,2.824,0,0,0,13.091,0H6.169A2.824,2.824,0,0,0,3.348,2.821V4.853H2.821A2.824,2.824,0,0,0,0,7.674v4.514a2.824,2.824,0,0,0,2.821,2.821h.527v2.558A1.7,1.7,0,0,0,5.041,19.26h9.178a1.7,1.7,0,0,0,1.693-1.693V15.009h.527a2.824,2.824,0,0,0,2.821-2.821V7.674A2.824,2.824,0,0,0,16.439,4.853ZM4.476,2.821A1.7,1.7,0,0,1,6.169,1.129h6.921a1.7,1.7,0,0,1,1.693,1.693V4.853H4.476ZM14.783,17.567a.565.565,0,0,1-.564.564H5.041a.565.565,0,0,1-.564-.564V12H14.783Zm3.348-5.379a1.7,1.7,0,0,1-1.693,1.693h-.527V12h.339a.564.564,0,1,0,0-1.129H3.009a.564.564,0,1,0,0,1.129h.339v1.881H2.821a1.7,1.7,0,0,1-1.693-1.693V7.674A1.7,1.7,0,0,1,2.821,5.981H16.439a1.7,1.7,0,0,1,1.693,1.693Z"
                          fill="#2c6ae5" />
                        <path id="Path_193" data-name="Path 193"
                          d="M204.574,353h-3.009a.564.564,0,1,0,0,1.128h3.009a.564.564,0,1,0,0-1.128Z"
                          transform="translate(-193.439 -339.721)" fill="#2c6ae5" />
                        <path id="Path_194" data-name="Path 194"
                          d="M204.574,417h-3.009a.564.564,0,1,0,0,1.129h3.009a.564.564,0,1,0,0-1.129Z"
                          transform="translate(-193.439 -401.314)" fill="#2c6ae5" />
                        <path id="Path_195" data-name="Path 195"
                          d="M67.37,193H65.564a.564.564,0,1,0,0,1.128H67.37a.564.564,0,1,0,0-1.128Z"
                          transform="translate(-62.555 -185.74)" fill="#2c6ae5" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="cashier-salereturns-table-area">
              <div class="cashier-salereturns-table-innerD">
                <div
                  class="cashier-salereturns-table-inner-wrapperD border border-solid border-grayBorder border-b-0 mb-7">
                  <div class="cashier-salereturns-table-list flex border-b border-solid border-grayBorder h-12">
                    <div class="cashier-salereturns-table-checkboxF default-light-theme">
                      <input type="checkbox" id="b-check" name="b-check" data-checkbox-name="cbi" class="selectall">
                    </div>
                    <div class="cashier-salereturns-table-dateF">
                      <h5>Name</h5>
                    </div>
                    <div class="cashier-salereturns-table-referenceF">
                      <h5>Phone</h5>
                    </div>
                    <div class="cashier-salereturns-table-customerF">
                      <h5>Email</h5>
                    </div>
                    <div class="cashier-salereturns-table-companyF">
                      <h5>Biller Code</h5>
                    </div>
                    <div class="cashier-salereturns-table-warehouseF">
                      <h5>Address</h5>
                    </div>
                    <div class="cashier-salereturns-table-actionF">
                      <h5>Action</h5>
                    </div>
                  </div>
                  <div class="cashier-salereturns-table-list flex border-b border-solid border-grayBorder h-12">
                    <div class="cashier-salereturns-table-checkboxF default-light-theme">
                      <input type="checkbox" id="cbi_1" name="cbi" value="1" data-select-all="b-check" class="checkme">
                    </div>
                    <div class="cashier-salereturns-table-dateF">
                      <span>Ahsan Enterprise</span>
                    </div>
                    <div class="cashier-salereturns-table-referenceF">
                      <span>+6 698 250 875</span>
                    </div>
                    <div class="cashier-salereturns-table-customerF">
                      <span>info@example.com</span>
                    </div>
                    <div class="cashier-salereturns-table-companyF">
                      <span>BDevs Technology</span>
                    </div>
                    <div class="cashier-salereturns-table-warehouseF">
                      <span>Halmate Station, NY, USA</span>
                    </div>
                    <div class="cashier-salereturns-table-actionF">
                      <div class="dropdown">
                        <button class="common-action-menu-style">Action
                          <i class="fa-sharp fa-solid fa-caret-down"></i>
                        </button>
                        <div class="dropdown-list">
                          <button class="dropdown-menu-item">
                            <img src="assets/img/icon/action-2.png" alt="icon not found">
                            <span>Update</span>
                          </button>
                          <button class="dropdown-menu-item">
                            <img src="assets/img/icon/action-6.png" alt="icon not found">
                            <span>Delete</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="cashier-salereturns-table-list flex border-b border-solid border-grayBorder h-12">
                    <div class="cashier-salereturns-table-checkboxF default-light-theme">
                      <input type="checkbox" id="cbi_2" name="cbi" value="2" data-select-all="b-check" class="checkme">
                    </div>
                    <div class="cashier-salereturns-table-dateF">
                      <span>Devil Stationary</span>
                    </div>
                    <div class="cashier-salereturns-table-referenceF">
                      <span>+2 985 668 622</span>
                    </div>
                    <div class="cashier-salereturns-table-customerF">
                      <span>ampa@example.com</span>
                    </div>
                    <div class="cashier-salereturns-table-companyF">
                      <span>BW2-00570</span>
                    </div>
                    <div class="cashier-salereturns-table-warehouseF">
                      <span>Hazelwood Urbandale, IA</span>
                    </div>
                    <div class="cashier-salereturns-table-actionF">
                      <div class="dropdown">
                        <button class="common-action-menu-style">Action
                          <i class="fa-sharp fa-solid fa-caret-down"></i>
                        </button>
                        <div class="dropdown-list">
                          <button class="dropdown-menu-item">
                            <img src="assets/img/icon/action-2.png" alt="icon not found">
                            <span>Update</span>
                          </button>
                          <button class="dropdown-menu-item">
                            <img src="assets/img/icon/action-6.png" alt="icon not found">
                            <span>Delete</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="cashier-salereturns-table-list flex border-b border-solid border-grayBorder h-12">
                    <div class="cashier-salereturns-table-checkboxF default-light-theme">
                      <input type="checkbox" id="cbi_3" name="cbi" value="3" data-select-all="b-check" class="checkme">
                    </div>
                    <div class="cashier-salereturns-table-dateF">
                      <span>Fashion Shop</span>
                    </div>
                    <div class="cashier-salereturns-table-referenceF">
                      <span>+5 658 636 970</span>
                    </div>
                    <div class="cashier-salereturns-table-customerF">
                      <span>tylor@example.com</span>
                    </div>
                    <div class="cashier-salereturns-table-companyF">
                      <span>BW1-00554</span>
                    </div>
                    <div class="cashier-salereturns-table-warehouseF">
                      <span>Andell Road, Gallatin, TN</span>
                    </div>
                    <div class="cashier-salereturns-table-actionF">
                      <div class="dropdown">
                        <button class="common-action-menu-style">Action
                          <i class="fa-sharp fa-solid fa-caret-down"></i>
                        </button>
                        <div class="dropdown-list">
                          <button class="dropdown-menu-item">
                            <img src="assets/img/icon/action-2.png" alt="icon not found">
                            <span>Update</span>
                          </button>
                          <button class="dropdown-menu-item">
                            <img src="assets/img/icon/action-6.png" alt="icon not found">
                            <span>Delete</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="cashier-salereturns-table-list flex border-b border-solid border-grayBorder h-12">
                    <div class="cashier-salereturns-table-checkboxF default-light-theme">
                      <input type="checkbox" id="cbi_4" name="cbi" value="4" data-select-all="b-check" class="checkme">
                    </div>
                    <div class="cashier-salereturns-table-dateF">
                      <span>Warehouse</span>
                    </div>
                    <div class="cashier-salereturns-table-referenceF">
                      <span>+2 365 052 010</span>
                    </div>
                    <div class="cashier-salereturns-table-customerF">
                      <span>john@example.com</span>
                    </div>
                    <div class="cashier-salereturns-table-companyF">
                      <span>BW1-00358</span>
                    </div>
                    <div class="cashier-salereturns-table-warehouseF">
                      <span>North Avenue, Norfolk, NE</span>
                    </div>
                    <div class="cashier-salereturns-table-actionF">
                      <div class="dropdown">
                        <button class="common-action-menu-style">Action
                          <i class="fa-sharp fa-solid fa-caret-down"></i>
                        </button>
                        <div class="dropdown-list">
                          <button class="dropdown-menu-item">
                            <img src="assets/img/icon/action-2.png" alt="icon not found">
                            <span>Update</span>
                          </button>
                          <button class="dropdown-menu-item">
                            <img src="assets/img/icon/action-6.png" alt="icon not found">
                            <span>Delete</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="cashier-salereturns-table-list flex border-b border-solid border-grayBorder h-12">
                    <div class="cashier-salereturns-table-checkboxF default-light-theme">
                      <input type="checkbox" id="cbi_5" name="cbi" value="5" data-select-all="b-check" class="checkme">
                    </div>
                    <div class="cashier-salereturns-table-dateF">
                      <span>Sinemax Incorporation</span>
                    </div>
                    <div class="cashier-salereturns-table-referenceF">
                      <span>+9 057 335 058</span>
                    </div>
                    <div class="cashier-salereturns-table-customerF">
                      <span>peter@example.com</span>
                    </div>
                    <div class="cashier-salereturns-table-companyF">
                      <span>BW2-00875</span>
                    </div>
                    <div class="cashier-salereturns-table-warehouseF">
                      <span>Tenmile, San Diego, CA</span>
                    </div>
                    <div class="cashier-salereturns-table-actionF">
                      <div class="dropdown">
                        <button class="common-action-menu-style">Action
                          <i class="fa-sharp fa-solid fa-caret-down"></i>
                        </button>
                        <div class="dropdown-list">
                          <button class="dropdown-menu-item">
                            <img src="assets/img/icon/action-2.png" alt="icon not found">
                            <span>Update</span>
                          </button>
                          <button class="dropdown-menu-item">
                            <img src="assets/img/icon/action-6.png" alt="icon not found">
                            <span>Delete</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="cashier-salereturns-table-list flex border-b border-solid border-grayBorder h-12">
                    <div class="cashier-salereturns-table-checkboxF default-light-theme">
                      <input type="checkbox" id="cbi_6" name="cbi" value="6" data-select-all="b-check" class="checkme">
                    </div>
                    <div class="cashier-salereturns-table-dateF">
                      <span>Blade Firm House</span>
                    </div>
                    <div class="cashier-salereturns-table-referenceF">
                      <span>+1 021 788 986</span>
                    </div>
                    <div class="cashier-salereturns-table-customerF">
                      <span>deo@example.com</span>
                    </div>
                    <div class="cashier-salereturns-table-companyF">
                      <span>BW1-00471</span>
                    </div>
                    <div class="cashier-salereturns-table-warehouseF">
                      <span>White Lane, Fort Valley, GA</span>
                    </div>
                    <div class="cashier-salereturns-table-actionF">
                      <div class="dropdown">
                        <button class="common-action-menu-style">Action
                          <i class="fa-sharp fa-solid fa-caret-down"></i>
                        </button>
                        <div class="dropdown-list">
                          <button class="dropdown-menu-item">
                            <img src="assets/img/icon/action-2.png" alt="icon not found">
                            <span>Update</span>
                          </button>
                          <button class="dropdown-menu-item">
                            <img src="assets/img/icon/action-6.png" alt="icon not found">
                            <span>Delete</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="cashier-salereturns-table-list flex border-b border-solid border-grayBorder h-12">
                    <div class="cashier-salereturns-table-checkboxF default-light-theme">
                      <input type="checkbox" id="cbi_7" name="cbi" value="7" data-select-all="b-check" class="checkme">
                    </div>
                    <div class="cashier-salereturns-table-dateF">
                      <span>Theme Cook</span>
                    </div>
                    <div class="cashier-salereturns-table-referenceF">
                      <span>+1 982 023 875</span>
                    </div>
                    <div class="cashier-salereturns-table-customerF">
                      <span>joseph@example.com</span>
                    </div>
                    <div class="cashier-salereturns-table-companyF">
                      <span>BW2-00652</span>
                    </div>
                    <div class="cashier-salereturns-table-warehouseF">
                      <span>Cabell Avenue, Lorton, VA</span>
                    </div>
                    <div class="cashier-salereturns-table-actionF">
                      <div class="dropdown">
                        <button class="common-action-menu-style">Action
                          <i class="fa-sharp fa-solid fa-caret-down"></i>
                        </button>
                        <div class="dropdown-list">
                          <button class="dropdown-menu-item">
                            <img src="assets/img/icon/action-2.png" alt="icon not found">
                            <span>Update</span>
                          </button>
                          <button class="dropdown-menu-item">
                            <img src="assets/img/icon/action-6.png" alt="icon not found">
                            <span>Delete</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="cashier-salereturns-table-list flex border-b border-solid border-grayBorder h-12">
                    <div class="cashier-salereturns-table-checkboxF default-light-theme">
                      <input type="checkbox" id="cbi_8" name="cbi" value="8" data-select-all="b-check" class="checkme">
                    </div>
                    <div class="cashier-salereturns-table-dateF">
                      <span>Amazon Transport</span>
                    </div>
                    <div class="cashier-salereturns-table-referenceF">
                      <span>+8 585 986 985</span>
                    </div>
                    <div class="cashier-salereturns-table-customerF">
                      <span>mark@example.com</span>
                    </div>
                    <div class="cashier-salereturns-table-companyF">
                      <span>BW2-00570</span>
                    </div>
                    <div class="cashier-salereturns-table-warehouseF">
                      <span>Private Lane, Albany, GA</span>
                    </div>
                    <div class="cashier-salereturns-table-actionF">
                      <div class="dropdown">
                        <button class="common-action-menu-style">Action
                          <i class="fa-sharp fa-solid fa-caret-down"></i>
                        </button>
                        <div class="dropdown-list">
                          <button class="dropdown-menu-item">
                            <img src="assets/img/icon/action-2.png" alt="icon not found">
                            <span>Update</span>
                          </button>
                          <button class="dropdown-menu-item">
                            <img src="assets/img/icon/action-6.png" alt="icon not found">
                            <span>Delete</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="cashier-salereturns-table-list flex border-b border-solid border-grayBorder h-12">
                    <div class="cashier-salereturns-table-checkboxF default-light-theme">
                      <input type="checkbox" id="cbi_9" name="cbi" value="9" data-select-all="b-check" class="checkme">
                    </div>
                    <div class="cashier-salereturns-table-dateF">
                      <span>Mim Landry</span>
                    </div>
                    <div class="cashier-salereturns-table-referenceF">
                      <span>+5 698 020 420</span>
                    </div>
                    <div class="cashier-salereturns-table-customerF">
                      <span>sina@example.com</span>
                    </div>
                    <div class="cashier-salereturns-table-companyF">
                      <span>BW1-00254</span>
                    </div>
                    <div class="cashier-salereturns-table-warehouseF">
                      <span>Marigold Lane, Miami, FL </span>
                    </div>
                    <div class="cashier-salereturns-table-actionF">
                      <div class="dropdown">
                        <button class="common-action-menu-style">Action
                          <i class="fa-sharp fa-solid fa-caret-down"></i>
                        </button>
                        <div class="dropdown-list">
                          <button class="dropdown-menu-item">
                            <img src="assets/img/icon/action-2.png" alt="icon not found">
                            <span>Update</span>
                          </button>
                          <button class="dropdown-menu-item">
                            <img src="assets/img/icon/action-6.png" alt="icon not found">
                            <span>Delete</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="cashier-salereturns-table-list flex border-b border-solid border-grayBorder h-12">
                    <div class="cashier-salereturns-table-checkboxF default-light-theme">
                      <input type="checkbox" id="cbi_10" name="cbi" value="10" data-select-all="b-check"
                        class="checkme">
                    </div>
                    <div class="cashier-salereturns-table-dateF">
                      <span>Medicare Pharmacy</span>
                    </div>
                    <div class="cashier-salereturns-table-referenceF">
                      <span>+7 253 301 224</span>
                    </div>
                    <div class="cashier-salereturns-table-customerF">
                      <span>charlee@example.com</span>
                    </div>
                    <div class="cashier-salereturns-table-companyF">
                      <span>BW1-00425</span>
                    </div>
                    <div class="cashier-salereturns-table-warehouseF">
                      <span>Wood Street, Metairie, LA</span>
                    </div>
                    <div class="cashier-salereturns-table-actionF">
                      <div class="dropdown">
                        <button class="common-action-menu-style">Action
                          <i class="fa-sharp fa-solid fa-caret-down"></i>
                        </button>
                        <div class="dropdown-list">
                          <button class="dropdown-menu-item">
                            <img src="assets/img/icon/action-2.png" alt="icon not found">
                            <span>Update</span>
                          </button>
                          <button class="dropdown-menu-item">
                            <img src="assets/img/icon/action-6.png" alt="icon not found">
                            <span>Delete</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cashier-pagination-area">
                <div class="cashier-pagination-wrapper">
                  <div class="grid grid-cols-12">
                    <div class="lg:col-span-3 md:col-span-6 col-span-12">
                      <div class="cashier-pagination-sort flex items-center flex-wrap maxSm:mb-4 maxSm:justify-center">
                        <figure class="text-[14px] font-normal text-gray mr-1.5">Rows per page : </figure>
                        <div class="cashier-select-field-style w-16">
                          <div class="single-input-field w-full">
                            <select class="block">
                              <option selected value="language-1">20</option>
                              <option value="language-2">25</option>
                              <option value="language-3">35</option>
                              <option value="language-4">45</option>
                              <option value="language-5">50</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="lg:col-span-9 md:col-span-6 col-span-12">
                      <div class="cashier-pagination text-right maxSm:text-center">
                        <ul>
                          <li><a href="javascript:void(0)">
                              <i class="fa-light fa-angle-left"></i>
                            </a></li>
                          <li><a href="javascript:void(0)" class="active">01</a></li>
                          <li><a href="javascript:void(0)">02</a></li>
                          <li><a href="javascript:void(0)">03</a></li>
                          <li><a href="javascript:void(0)">04</a></li>
                          <li><a href="javascript:void(0)">
                              <i class="fa-light fa-angle-right"></i>
                            </a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cashier-copyright-area">
          <div class="cashier-copyright text-center bg-themeBlue h-20 leading-[80px] mt-20">
            <span class="text-[15px] text-white font-normal">© Copyright by BDevs -2022-2023</span>
          </div>
        </div>
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