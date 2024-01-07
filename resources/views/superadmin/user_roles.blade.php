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
          <div class="cashier-unit-area bg-white p-7 custom-shadow rounded-lg mb-5">
            <h4 class="text-[20px] text-heading font-bold mb-10">Create Role</h4>
            <div class="grid grid-cols-12 md:gap-x-7 maxSm:gap-x-0">
              <div class="lg:col-span-6 md:col-span-12 col-span-12">
                <div class="cashier-unit-content">
                  <div class="cashier-select-field mb-6">
                    <h5 class="text-[15px] text-heading font-semibold mb-3">Role</h5>
                    <div class="cashier-input-field-style">
                      <div class="single-input-field w-full">
                        <input type="text" placeholder="Admin">
                      </div>
                    </div>
                  </div>
                  <div class="cashier-select-field mb-7">
                    <h5 class="text-[15px] text-heading font-semibold mb-3">Description</h5>
                    <div class="cashier-input-field-style">
                      <div class="single-input-field w-full">
                        <input type="text" placeholder="The admin can control all the access">
                      </div>
                    </div>
                  </div>
                  <div class="cashier-managesale-top-btn default-light-theme mb-7">
                    <button class="mb-1 btn-primary">Create Role</button>
                  </div>
                </div>
              </div>
              <div class="lg:col-span-6 md:col-span-12 col-span-12">
                <div class="cashier-managesale-table-inner">
                  <div class="cashier-managesale-table-inner-wrapper border border-solid border-grayBorder border-b-0">
                    <div class="cashier-managesale-table-list flex border-b border-solid border-grayBorder h-12">
                      <div class="cashier-managesale-table-checkbox default-light-theme">
                        <input type="checkbox" id="b-check" name="b-check" data-checkbox-name="cbi" class="selectall">
                      </div>
                      <div class="cashier-managesale-table-name">
                        <h5>Role</h5>
                      </div>
                      <div class="cashier-managesale-table-description">
                        <h5>Description</h5>
                      </div>
                      <div class="cashier-managesale-table-action">
                        <h5>Action</h5>
                      </div>
                    </div>
                    <div class="cashier-managesale-table-list flex border-b border-solid border-grayBorder h-12">
                      <div class="cashier-managesale-table-checkbox default-light-theme">
                        <input type="checkbox" id="cbi_1" name="cbi" value="1" data-select-all="b-check"
                          class="checkme">
                      </div>
                      <div class="cashier-managesale-table-name">
                        <span>Owener</span>
                      </div>
                      <div class="cashier-managesale-table-description">
                        <span>The owner can control all the access</span>
                      </div>
                      <div class="cashier-managesale-table-action">
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
                    <div class="cashier-managesale-table-list flex border-b border-solid border-grayBorder h-12">
                      <div class="cashier-managesale-table-checkbox default-light-theme">
                        <input type="checkbox" id="cbi_2" name="cbi" value="2" data-select-all="b-check"
                          class="checkme">
                      </div>
                      <div class="cashier-managesale-table-name">
                        <span>Super Admin</span>
                      </div>
                      <div class="cashier-managesale-table-description">
                        <span>The Supper admin can control all the access</span>
                      </div>
                      <div class="cashier-managesale-table-action">
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
                    <div class="cashier-managesale-table-list flex border-b border-solid border-grayBorder h-12">
                      <div class="cashier-managesale-table-checkbox default-light-theme">
                        <input type="checkbox" id="cbi_3" name="cbi" value="3" data-select-all="b-check"
                          class="checkme">
                      </div>
                      <div class="cashier-managesale-table-name">
                        <span>Admin</span>
                      </div>
                      <div class="cashier-managesale-table-description">
                        <span>The admin can control all the access</span>
                      </div>
                      <div class="cashier-managesale-table-action">
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
                    <div class="cashier-managesale-table-list flex border-b border-solid border-grayBorder h-12">
                      <div class="cashier-managesale-table-checkbox default-light-theme">
                        <input type="checkbox" id="cbi_4" name="cbi" value="4" data-select-all="b-check"
                          class="checkme">
                      </div>
                      <div class="cashier-managesale-table-name">
                        <span>Manager</span>
                      </div>
                      <div class="cashier-managesale-table-description">
                        <span>Manager has specific access</span>
                      </div>
                      <div class="cashier-managesale-table-action">
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
                    <div class="cashier-managesale-table-list flex border-b border-solid border-grayBorder h-12">
                      <div class="cashier-managesale-table-checkbox default-light-theme">
                        <input type="checkbox" id="cbi_5" name="cbi" value="5" data-select-all="b-check"
                          class="checkme">
                      </div>
                      <div class="cashier-managesale-table-name">
                        <span>Supervisor</span>
                      </div>
                      <div class="cashier-managesale-table-description">
                        <span>Supervisor has little access</span>
                      </div>
                      <div class="cashier-managesale-table-action">
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

                    <div class="cashier-managesale-table-list flex border-b border-solid border-grayBorder h-12">
                      <div class="cashier-managesale-table-checkbox default-light-theme">
                        <input type="checkbox" id="cbi_6" name="cbi" value="6" data-select-all="b-check"
                          class="checkme">
                      </div>
                      <div class="cashier-managesale-table-name">
                        <span>Biller</span>
                      </div>
                      <div class="cashier-managesale-table-description">
                        <span>Biller has limited access</span>
                      </div>
                      <div class="cashier-managesale-table-action">
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
                    <div class="cashier-managesale-table-list flex border-b border-solid border-grayBorder h-12">
                      <div class="cashier-managesale-table-checkbox default-light-theme">
                        <input type="checkbox" id="cbi_7" name="cbi" value="7" data-select-all="b-check"
                          class="checkme">
                      </div>
                      <div class="cashier-managesale-table-name">
                        <span>Biller</span>
                      </div>
                      <div class="cashier-managesale-table-description">
                        <span>Biller has limited access</span>
                      </div>
                      <div class="cashier-managesale-table-action">
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
                    <div class="cashier-managesale-table-list flex border-b border-solid border-grayBorder h-12">
                      <div class="cashier-managesale-table-checkbox default-light-theme">
                        <input type="checkbox" id="cbi_8" name="cbi" value="8" data-select-all="b-check"
                          class="checkme">
                      </div>
                      <div class="cashier-managesale-table-name">
                        <span>Staff</span>
                      </div>
                      <div class="cashier-managesale-table-description">
                        <span>Staff has specific access</span>
                      </div>
                      <div class="cashier-managesale-table-action">
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
                    <div class="cashier-managesale-table-list flex border-b border-solid border-grayBorder h-12">
                      <div class="cashier-managesale-table-checkbox default-light-theme">
                        <input type="checkbox" id="cbi_9" name="cbi" value="9" data-select-all="b-check"
                          class="checkme">
                      </div>
                      <div class="cashier-managesale-table-name">
                        <span>Biller</span>
                      </div>
                      <div class="cashier-managesale-table-description">
                        <span>Biller has limited access</span>
                      </div>
                      <div class="cashier-managesale-table-action">
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
  </main>


  <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
  <script src="assets/js/metisMenu.js"></script>
  <script src="assets/js/jquery.nice-select.js"></script>
  <script src="assets/js/apexcharts.js"></script>
  <script src="assets/js/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from codeskdhaka.com/html/cashiar-prev/cashiar/userrole.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jan 2024 18:23:28 GMT -->
</html>