<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Sobrokom</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-menu'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <!-- class="has-arrow" -->
            <a href="admin_index.html" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li class="menu-label">Product Elements</li>
        <!-- Settings section start -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-star'></i>
                </div>
                <div class="menu-title">Settings</div>
            </a>
            <ul>
                <li>
                    <a href="{{ url('admin/update_admin_password') }}"><i class="bx bx-right-arrow-alt"></i>Update
                        password</a>
                </li>
                <li>
                    <a href="{{ url('admin/update_admin_details') }}"><i class="bx bx-right-arrow-alt"></i>Update
                        details</a>
                </li>
            </ul>
        </li>
         <!-- Settings section End -->
         
        <!-- Band section start -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-star'></i>
                </div>
                <div class="menu-title">Band Manage</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Add New
                        Band</a>
                </li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>All Band
                        List</a>
                </li>
            </ul>
        </li>
        <!-- Band section End -->

        <!--category section start -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-grid-alt'></i>
                </div>
                <div class="menu-title">Category Manage</div>
            </a>
            <ul>
                <li> <a href="admin_category.html"><i class="bx bx-right-arrow-alt"></i>All Category List</a>
                </li>
                <li> <a href="admin_create_category.html"><i class="bx bx-right-arrow-alt"></i>Add New
                        Category</a>
                </li>
            </ul>
        </li>
        <!-- category section end -->

        <!-- sub category section start -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-sitemap'></i>
                </div>
                <div class="menu-title">Sub-Category Manage</div>
            </a>
            <ul>
                <li> <a href="admin_create_subCategroy.html"><i class="bx bx-right-arrow-alt"></i>Add New
                        Sub-Category</a>
                </li>
                <li> <a href="admin_subCategroy.html"><i class="bx bx-right-arrow-alt"></i>All Sub-Category
                        List</a>
                </li>
                <li>
                    <a href="admin_create_innerCategory.html"><i class="bx bx-right-arrow-alt"></i>Add Inner
                        Category</a>
                </li>
                <li>
                    <a href="admin_innerCategory.html"><i class="bx bx-right-arrow-alt"></i>All Inner Category</a>
                </li>
            </ul>
        </li>
        <!-- sub category section end -->

        <!-- product section start -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-briefcase-alt'></i>
                </div>
                <div class="menu-title">Product Manage</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Add New
                        Product</a>
                </li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>All Product
                        Details</a>
                </li>
            </ul>
        </li>
        <!-- product section end -->
        <!-- product section end -->
        <hr>
        <!-- Other section start -->
        <li class="menu-label">Other Elements</li>
        <!-- slider section start -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-slideshow'></i>
                </div>
                <div class="menu-title">Slider Manage</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Add New
                        Slider</a>
                </li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>All Slider
                        List</a>
                </li>
            </ul>
        </li>
        <!-- slider section end -->
        <!-- Banner section start -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-chalkboard'></i>
                </div>
                <div class="menu-title">Banner Manage</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Add New
                        Banner</a>
                </li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>All Banner
                        List</a>
                </li>
            </ul>
        </li>
        <!-- Banner section end -->
        <!-- Cuppon section start -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-loader'></i>
                </div>
                <div class="menu-title">Cuppon Manage</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Add New
                        Cuppon</a>
                </li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>All Cuppon
                        List</a>
                </li>
            </ul>
        </li>
        <!-- Cuppon section end -->
        <!-- Other section end -->
        <hr>
        <!-- page section start -->
        <li class="menu-label">Page Elements</li>
        <!-- Shipping area section start -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-map'></i>
                </div>
                <div class="menu-title">Shipping Area</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>All Division</a>
                </li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>All District</a>
                </li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>All State</a>
                </li>
            </ul>
        </li>
        <!-- Shipping area section end -->
        <!-- vendor manage section start -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='lni lni-network'></i>
                </div>
                <div class="menu-title">Vendor Manage</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Active Vendor</a>
                </li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Inactive Vendor</a>
                </li>
            </ul>
        </li>
        <!-- vendor manage section end -->
        <!-- Order manage section start -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart-alt'></i>
                </div>
                <div class="menu-title">Order Manage</div>
            </a>
            <ul>
                <li> <a href="#">
                        <i class="bx bx-right-arrow-alt"></i>pending
                    </a>
                </li>
                <li> <a href="#">
                        <i class="bx bx-right-arrow-alt"></i>Confirmed
                    </a>
                </li>
                <li> <a href="#">
                        <i class="bx bx-right-arrow-alt"></i>Processing
                    </a>
                </li>
                <li> <a href="#">
                        <i class="bx bx-right-arrow-alt"></i>Delivered
                    </a>
                </li>
            </ul>
        </li>
        <!-- order manage section end -->
        <!-- Return Order section start -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-paperclip'></i>
                </div>
                <div class="menu-title">Return Order</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Return request</a>
                </li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Complete request</a>
                </li>
            </ul>
        </li>
        <!-- Return Order section end -->
        <!-- Reports manage section start -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-line-chart'></i>
                </div>
                <div class="menu-title">Reports Manage</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Report View</a>
                </li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Order by user</a>
                </li>
            </ul>
        </li>
        <!-- Report manage section end -->
        <!-- User manage section start -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='lni lni-slideshare'></i>
                </div>
                <div class="menu-title">User Manage</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>All User</a>
                </li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>All Vendor</a>
                </li>
            </ul>
        </li>
        <!-- User manage section end -->
        <!-- Blog manage section start -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='lni lni-pyramids'></i>
                </div>
                <div class="menu-title">Blog Manage</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>All Blog post</a>
                </li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>All Blog Category</a>
                </li>
            </ul>
        </li>
        <!-- Blog manage section end -->
        <!-- Review manage section start -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='lni lni-indent-increase'></i>
                </div>
                <div class="menu-title">Review Manage</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Pending Review</a>
                </li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Publish Review</a>
                </li>
            </ul>
        </li>
        <!-- Review manage section end -->
        <!-- Setting section start -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='lni lni-cog'></i>
                </div>
                <div class="menu-title">Setting Manage</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Site Setting</a>
                </li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Seo Setting</a>
                </li>
            </ul>
        </li>
        <!-- Setting section end -->
        <!-- Stock manage section start -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='lni lni-cart-full'></i>
                </div>
                <div class="menu-title">Stock Manage</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Product Stock</a>
                </li>
            </ul>
        </li>
        <!-- Stock manage section end -->
        <!-- page section end -->
        <hr>
        <!-- Role & Permission section start -->
        <li class="menu-label">Role & Permission Elements</li>
        <!-- Role & Permission manage section start -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='lni lni-users'></i>
                </div>
                <div class="menu-title">Role & Permission</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>All Permission</a>
                </li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>All Roles</a>
                </li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Roles in Permission</a>
                </li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>All Roles in Permission</a>
                </li>
            </ul>
        </li>
        <!-- Role & Permission manage section end -->
        <!-- Admin manage section start -->
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='lni lni-user'></i>
                </div>
                <div class="menu-title">Admin Manage</div>
            </a>
            <ul>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>All Admin</a>
                </li>
                <li> <a href="#"><i class="bx bx-right-arrow-alt"></i>Add Admin</a>
                </li>
            </ul>
        </li>
        <!-- Admin manage section end -->
        <!-- Role & Permission section end -->
        <li>
            <a href="#" target="_blank">
                <div class="parent-icon"><i class="bx bx-support"></i>
                </div>
                <div class="menu-title">Support</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->
