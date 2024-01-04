
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