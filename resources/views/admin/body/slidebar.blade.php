<div class="vertical-menu">
                <div data-simplebar class="h-100">
                    <!-- User details -->
                
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>
                            <li>
                                <a href="index.html" class="waves-effect">
                                    <!-- <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span> -->
                                    <i class="ri-dashboard-line"></i> 
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>

                                 <!-- Slide bar for Manage suppliers option -->
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-mail-send-line"></i>
                                    <span>Manage Suppliers</span>
                                 </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('supplier.all') }}">All Supplier</a></li>
                                </ul>
                            </li>
                          
                            <!-- Slide bar for Manage customers option -->
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-mail-send-line"></i>
                                    <span>Manage Customers</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('customer.all') }}">All Customers</a></li>
                                    <li><a href="{{ route('credit.customer') }}">Credit Customers</a></li>

                                    <li><a href="{{ route('paid.customer') }}">Paid Customers</a></li>
                                    <li><a href="{{ route('customer.wise.report') }}">Customer Wise Report</a></li>

                                </ul>
                            </li>

                            <!-- Slide bar for Manage units option -->
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-mail-send-line"></i>
                                    <span>Manage Units</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('unit.all') }}">All Unit</a></li>
                                </ul>
                            </li>

                            <!-- Slide bar for Manage category option -->
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-mail-send-line"></i>
                                    <span>Manage Category</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('category.all') }}">All Category</a></li>

                                </ul>
                            </li>

                            <!-- Slide bar for Manage product option -->
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-mail-send-line"></i>
                                    <span>Manage Product</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('product.all') }}">All Product</a></li>
                                </ul>
                             </li>


                             <!-- Slide bar for Manage purchase option -->
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-mail-send-line"></i>
                                    <span>Manage Purchase</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('purchase.all') }}">All Purchase</a></li>
                                    <li><a href="{{ route('purchase.pending') }}">Approval Purchase</a></li>
                                    <li><a href="{{ route('daily.purchase.report') }}">Daily Purchase Report</a></li>

                                </ul>
                            </li>

                            <!-- Slide bar for Manage invoice option -->
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-compass-2-fill"></i>
                                    <span>Manage Invoice</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('invoice.all') }}">All Invoice</a></li>
                                    <li><a href="{{ route('invoice.pending.list') }}">Approval Invoice</a></li>
                                    <li><a href="{{ route('print.invoice.list') }}">Print Invoice List</a></li>
                                    <li><a href="{{ route('daily.invoice.report') }}">Daily Invoice Report</a></li>               
                                </ul>
                            </li>

                            <li class="menu-title">Stock</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-gift-fill"></i>
                                    <span>Manage Stock</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('stock.report') }}">Stock Report</a></li>
                                    <li><a href="{{ route('stock.supplier.wise') }}">Supplier / Product Wise </a></li>

                                </ul>
                            </li>



                            <li class="menu-title">Edit Front design</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-mail-send-line"></i>
                                    <span>Home Slide Setup</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('home.slide') }}">Home Slide</a></li>              
                                </ul>
                            </li>

                            
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-mail-send-line"></i>
                                    <span>About Page Setup</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('about.page') }}">About Page</a></li>
                                <li><a href="{{ route('about.multi.image') }}">About Multi Image</a></li>
                                <li><a href="{{ route('all.multi.image') }}">All Multi Image</a></li>
                                </ul>
                            </li>


                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-mail-send-line"></i>
                                    <span>Portfolio Page Setup</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('all.portfolio') }}">All Portfolio</a></li>
                                <li><a href=" ">Add Portfolio</a></li>
                                <li><a href="{{ route('add.portfolio') }}">Add Portfolio</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Pages</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-account-circle-line"></i>
                                    <span>Blog Category</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('all.blog.category') }}">All Blog Category</a></li>
                                <li><a href="{{ route('add.blog.category') }}">Add Blog Category</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-profile-line"></i>
                                    <span>Blog Page</span>
                                </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('all.blog') }}">All Blog</a></li>
                                    <li><a href="{{ route('add.blog') }}">Add Blog</a></li>
                    
                                    </ul>
                            </li>


                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-profile-line"></i>
                                    <span>Footer Page Setup</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                 <li><a href="{{ route('footer.setup') }}">Footer Setup</a></li>
                                </ul>
                            </li>


                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-profile-line"></i>
                                    <span>Contact Message </span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('contact.message') }}">Contact Message</a></li>
                                </ul>
                            </li>


                         
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>