<?php
include_once 'header.php';
?>

<section>
    <div class="banner-block-lft mt-116">
        <div class="block-img">
            <img src="assets/images/banners/pricing-banner.svg" class="img-fluid desk-homebanner" alt="pricing-banner">
            <img src="assets/images/banners/pricing-banner-mob.jpg" class="img-fluid mob-homebanner" alt="pricing-banner" />
        </div>
        <div class="main-Wrapper">
            <div class="content">
                <h1>Get FieldWeb demo for free now! Pick a plan later.</h1>
                <p> Book your live demo now, and access all FieldWeb features, no credit card required.</p>
                <div class="mt-4">
                    <button type="submit" class="btn-getstarted" data-bs-toggle="modal" data-bs-target="#getdemoModal">Start Free Demo Now!</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="margin-btm" data-aos="fade-up">
    <div class="main-Wrapper sect_currency mt-5 mb-5">
        <span>Save Up To <span id="SavePricePM">Rs.1000</span>/user/month <img src="assets/images/arrow-rightblack-bold.svg"> </span>
        <div class="form-check form-switch custom-switch">
            <span>INR</span>
            <input class="form-check-input" type="checkbox" role="switch" id="SwitchCurrency">
            <span>USD</span>
        </div>
    </div>
    <div class="sect-pricing inr-pricing">
        <div class="main-Wrapper">
            <div class="row margin-btm">
                <div class="col-md-4">
                    <div class="pricing-plan-mob" data-bs-toggle="collapse" data-bs-target="#BasePricing">
                        <div class="sect-lft-pricing-plan">
                            <h3>Base</h3>
                            <div class="prod-user">
                                <img src="assets/images/user-icon.svg">
                                <span>1 User</span>
                                <img src="assets/images/question-mark-red.svg" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="1 User" data-bs-original-title="1 - 5 User">
                            </div>
                        </div>
                        <div class="sect-rgt-pricing-plan">
                            <div class="pp-collapsearrow">
                                <img src="assets/images/chevron-down-icon-wh.svg">
                            </div>
                            <h2><small>₹</small>300<small>/user/month</small></h2>
                        </div>
                    </div>
                    <div class="pricing-plan mb-4 collapse" id="BasePricing">
                        <div class="pricing-plan-head">
                            <h3>Base</h3>
                            <p>Centralize your operations: quoting, scheduling, invoicing, all in one place.</p>
                        </div>
                        <div class="pricing-plan-body">
                            <ul>
                                <li>Tasks - 50/month</li>
                                <li>Customer Data No. - 100</li>
                                <li>Live Support - NA</li>
                            </ul>
                            <h2><small>₹</small>300<small>/user/month</small></h2>
                            <p>Save ₹150/user/month</p>
                            <div class="p-3">
                                <button type="submit" class="btn-red w-100 rounded" data-bs-toggle="modal" data-bs-target="#mdl_pricingform">Buy Now</button>
                            </div>
                            <div class="prod-user margin-btm">
                                <img src="assets/images/user-icon.svg">
                                <span>1 User</span>
                                <img src="assets/images/question-mark.svg" data-bs-toggle="tooltip" data-bs-placement="top" title="1 User">
                            </div>
                        </div>
                        <div class="pricing-plan-foot">
                            <p>Core includes:</p>
                            <ul>
                                <li><img src="assets/images/check-white.svg">Schedule and manage jobs</li>
                                <li><img src="assets/images/check-white.svg">Send quotes and invoices</li>
                                <li><img src="assets/images/check-white.svg">Online request form</li>
                                <li><img src="assets/images/check-white.svg">24/7 client self-serve hub</li>
                                <li><img src="assets/images/check-white.svg">Digital payments as low as 2.7% +30c</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="popular-pricing-plan-mob" data-bs-toggle="collapse" data-bs-target="#AdvancedPricing">
                        <span class="ppm-lbl-most-popular">Most Popular</span>
                        <div class="pricing-plan-mob">
                            <div class="sect-lft-pricing-plan">
                                <h3>Advanced</h3>
                                <div class="prod-user">
                                    <img src="assets/images/user-icon.svg">
                                    <span>1 - 5 User</span>
                                    <img src="assets/images/question-mark-red.svg" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="1 - 5 User" data-bs-original-title="1 - 5 User">
                                </div>
                            </div>
                            <div class="sect-rgt-pricing-plan">
                                <div class="pp-collapsearrow">
                                    <img src="assets/images/chevron-down-icon-wh.svg">
                                </div>
                                <h2><small>₹</small>400<small>/user/month</small></h2>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-plan popular-plan mb-4 collapse" id="AdvancedPricing">
                        <div class="pricing-plan-head">
                            <span>Most Popular</span>
                            <h3>Advanced</h3>
                            <p>Forge smooth workflows for team synergy and client satisfaction.</p>
                        </div>
                        <div class="pricing-plan-body">
                            <ul>
                                <li>Tasks - 50/month</li>
                                <li>Customer Data No. - 100</li>
                                <li>Live Support - NA</li>
                            </ul>
                            <h2><small>₹</small>400<small>/user/month</small></h2>
                            <p>Save ₹150/user/month</p>
                            <div class="p-3">
                                <button type="submit" class="btn-red w-100 rounded" data-bs-toggle="modal" data-bs-target="#mdl_pricingform">Buy Now</button>
                            </div>
                            <div class="prod-user margin-btm">
                                <img src="assets/images/user-icon.svg">
                                <span>1 - 5 User</span>
                                <img src="assets/images/question-mark.svg" data-bs-toggle="tooltip" data-bs-placement="top" title="1 - 5 User">
                            </div>
                        </div>
                        <div class="pricing-plan-foot">
                            <p>Everything in Connect, plus:</p>
                            <ul>
                                <li><img src="assets/images/check-white.svg">Automated reminders</li>
                                <li><img src="assets/images/check-white.svg">Automatic payments</li>
                                <li><img src="assets/images/check-white.svg">QuickBooks Online</li>
                                <li><img src="assets/images/check-white.svg">sync Online booking</li>
                                <li><img src="assets/images/check-white.svg">Zapier Integration</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-plan-mob" data-bs-toggle="collapse" data-bs-target="#PremiumPricing">
                        <div class="sect-lft-pricing-plan">
                            <h3>Premium</h3>
                            <div class="prod-user">
                                <img src="assets/images/user-icon.svg">
                                <span>1 - 15 User</span>
                                <img src="assets/images/question-mark-red.svg" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="1 - 15 User" data-bs-original-title="1 - 5 User">
                            </div>
                        </div>
                        <div class="sect-rgt-pricing-plan">
                            <div class="pp-collapsearrow">
                                <img src="assets/images/chevron-down-icon-wh.svg">
                            </div>
                            <h2><small>₹</small>500<small>/user/month</small></h2>
                        </div>
                    </div>
                    <div class="pricing-plan mb-4 collapse" id="PremiumPricing">
                        <div class="pricing-plan-head">
                            <h3>Premium</h3>
                            <p>Scale your business with powerful service automation tools.</p>
                        </div>
                        <div class="pricing-plan-body">
                            <ul>
                                <li>Tasks - 50/month</li>
                                <li>Customer Data No. - 100</li>
                                <li>Live Support - NA</li>
                            </ul>
                            <h2><small>₹</small>500<small>/user/month</small></h2>
                            <p>Save ₹150/user/month</p>
                            <div class="p-3">
                                <button type="submit" class="btn-red w-100 rounded" data-bs-toggle="modal" data-bs-target="#mdl_pricingform">Buy Now</button>
                            </div>
                            <div class="prod-user margin-btm">
                                <img src="assets/images/user-icon.svg">
                                <span>1 - 15 User</span>
                                <img src="assets/images/question-mark.svg" data-bs-toggle="tooltip" data-bs-placement="top" title="1 - 15 User">
                            </div>
                        </div>
                        <div class="pricing-plan-foot">
                            <p>Everything in Connect, plus:</p>
                            <ul>
                                <li><img src="assets/images/check-white.svg">Quote add-ons and images</li>
                                <li><img src="assets/images/check-white.svg">Job costing</li>
                                <li><img src="assets/images/check-white.svg">Automated quote follow-ups</li>
                                <li><img src="assets/images/check-white.svg">Two way text messaging</li>
                                <li><img src="assets/images/check-white.svg">Tag and manage leads</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sect-pricing usd-pricing">
        <div class="main-Wrapper">
            <div class="row margin-btm">
                <div class="col-md-4">
                    <div class="pricing-plan-mob" data-bs-toggle="collapse" data-bs-target="#USDBasePricing">
                        <div class="sect-lft-pricing-plan">
                            <h3>Base</h3>
                            <div class="prod-user">
                                <img src="assets/images/user-icon.svg">
                                <span>1 User</span>
                                <img src="assets/images/question-mark-red.svg" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="1 User" data-bs-original-title="1 - 5 User">
                            </div>
                        </div>
                        <div class="sect-rgt-pricing-plan">
                            <div class="pp-collapsearrow">
                                <img src="assets/images/chevron-down-icon-wh.svg">
                            </div>
                            <h2><small>$</small>8<small>/user/month</small></h2>
                        </div>
                    </div>
                    <div class="pricing-plan mb-4 collapse" id="USDBasePricing">
                        <div class="pricing-plan-head">
                            <h3>Base</h3>
                            <p>Centralize your operations: quoting, scheduling, invoicing, all in one place.</p>
                        </div>
                        <div class="pricing-plan-body">
                            <ul>
                                <li>Tasks-50/month</li>
                                <li>Customer Data No.-100</li>
                                <li>Support-NA</li>
                            </ul>
                            <h2><small>$</small>8<small>/user/month</small></h2>
                            <p>Save $10/user/month</p>
                            <div class="p-3">
                                <button type="submit" class="btn-red w-100 rounded" data-bs-toggle="modal" data-bs-target="#mdl_pricingform">Buy Now</button>
                            </div>
                            <div class="prod-user margin-btm">
                                <img src="assets/images/user-icon.svg">
                                <span>1 User</span>
                                <img src="assets/images/question-mark.svg" data-bs-toggle="tooltip" data-bs-placement="top" title="1 - 5 User">
                            </div>
                        </div>
                        <div class="pricing-plan-foot">
                            <p>Core includes:</p>
                            <ul>
                                <li><img src="assets/images/check-white.svg">Job Scheduling & Dispatching</li>
                                <li><img src="assets/images/check-white.svg">Dashboard & Insights</li>
                                <li><img src="assets/images/check-white.svg">Attendance management</li>
                                <li><img src="assets/images/check-white.svg">Location Tracking</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="popular-pricing-plan-mob" data-bs-toggle="collapse" data-bs-target="#USDAdvancedPricing">
                        <span class="ppm-lbl-most-popular">Most Popular</span>
                        <div class="pricing-plan-mob">
                            <div class="sect-lft-pricing-plan">
                                <h3>Advanced</h3>
                                <div class="prod-user">
                                    <img src="assets/images/user-icon.svg">
                                    <span>1 - 5 User</span>
                                    <img src="assets/images/question-mark-red.svg" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="1 - 5 User" data-bs-original-title="1 - 5 User">
                                </div>
                            </div>
                            <div class="sect-rgt-pricing-plan">
                                <div class="pp-collapsearrow">
                                    <img src="assets/images/chevron-down-icon-wh.svg">
                                </div>
                                <h2><small>$</small>10<small>/user/month</small></h2>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-plan popular-plan mb-4 collapse" id="USDAdvancedPricing">
                        <div class="pricing-plan-head">
                            <span>Most Popular</span>
                            <h3>Advanced</h3>
                            <p>Forge smooth workflows for team synergy and client satisfaction.</p>
                        </div>
                        <div class="pricing-plan-body">
                            <ul>
                                <li>Tasks- 1000/Month</li>
                                <li>Customer Data No.-1000</li>
                                <li>Support-Live Chat</li>
                            </ul>
                            <h2><small>$</small>10<small>/user/month</small></h2>
                            <p>Save $15/user/month</p>
                            <div class="p-3">
                                <button type="submit" class="btn-red w-100 rounded" data-bs-toggle="modal" data-bs-target="#mdl_pricingform">Buy Now</button>
                            </div>
                            <div class="prod-user margin-btm">
                                <img src="assets/images/user-icon.svg">
                                <span>1 - 5 User</span>
                                <img src="assets/images/question-mark.svg" data-bs-toggle="tooltip" data-bs-placement="top" title="1 - 5 User">
                            </div>
                        </div>
                        <div class="pricing-plan-foot">
                            <p>Everything in Connect, plus:</p>
                            <ul>
                                <li><img src="assets/images/check-white.svg">Complaints Management</li>
                                <li><img src="assets/images/check-white.svg">Customer Management</li>
                                <li><img src="assets/images/check-white.svg">Expense Management</li>
                                <li><img src="assets/images/check-white.svg">Job completion report</li>
                                <li><img src="assets/images/check-white.svg">Distance Travelled</li>
                                <li><img src="assets/images/check-white.svg">Path Travelled</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pricing-plan-mob" data-bs-toggle="collapse" data-bs-target="#USDPremiumPricing">
                        <div class="sect-lft-pricing-plan">
                            <h3>Premium</h3>
                            <div class="prod-user">
                                <img src="assets/images/user-icon.svg">
                                <span>1 - 15 User</span>
                                <img src="assets/images/question-mark-red.svg" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="1 - 15 User" data-bs-original-title="1 - 5 User">
                            </div>
                        </div>
                        <div class="sect-rgt-pricing-plan">
                            <div class="pp-collapsearrow">
                                <img src="assets/images/chevron-down-icon-wh.svg">
                            </div>
                            <h2><small>$</small>12<small>/user/month</small></h2>
                        </div>
                    </div>
                    <div class="pricing-plan mb-4 collapse" id="USDPremiumPricing">
                        <div class="pricing-plan-head">
                            <h3>Premium</h3>
                            <p>Scale your business with powerful service automation tools.</p>
                        </div>
                        <div class="pricing-plan-body">
                            <ul>
                                <li>Tasks- Unlimited</li>
                                <li>Customer Data No.-Unlimited</li>
                                <li>Support-Dedicated Key Account Manager</li>
                            </ul>
                            <h2><small>$</small>12<small>/user/month</small></h2>
                            <p>Save $25/user/month</p>
                            <div class="p-3">
                                <button type="submit" class="btn-red w-100 rounded" data-bs-toggle="modal" data-bs-target="#mdl_pricingform">Buy Now</button>
                            </div>
                            <div class="prod-user margin-btm">
                                <img src="assets/images/user-icon.svg">
                                <span>1 - 15 User</span>
                                <img src="assets/images/question-mark.svg" data-bs-toggle="tooltip" data-bs-placement="top" title="1 - 15 User">
                            </div>
                        </div>
                        <div class="pricing-plan-foot">
                            <p>Everything in Connect, plus:</p>
                            <ul>
                                <li><img src="assets/images/check-white.svg">AMC Management</li>
                                <li><img src="assets/images/check-white.svg">Services Management</li>
                                <li><img src="assets/images/check-white.svg">Leads Tracker</li>
                                <li><img src="assets/images/check-white.svg">Inventory Management</li>
                                <li><img src="assets/images/check-white.svg">Quotation/Invoice</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="main-Wrapper margin-btm" data-aos="fade-up">
    <div class="cust-feedback-slider2">
        <div>
            <div class="custf-details">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <div class="custf-prof">
                            <img src="assets/images/image1.svg" />
                            <h6>John Pack, Jr.</h6>
                            <p>York Builders</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="custf-content">
                            <h4>“Jobber allows me to focus on the business.”</h4>
                            <p>There’s less resending of estimates or invoices, or customers wondering who is coming to their house and when. It’s also reduced missed appointments with automated reminders.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="custf-details">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <div class="custf-prof">
                            <img src="assets/images/image2.svg" />
                            <h6>John Pack, Jr.</h6>
                            <p>York Builders</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="custf-content">
                            <h4>“Jobber allows me to focus on the business.”</h4>
                            <p>There’s less resending of estimates or invoices, or customers wondering who is coming to their house and when. It’s also reduced missed appointments with automated reminders.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="main-Wrapper mt-8 margin-btm" data-aos="fade-up">
    <div class="sect-addons">
        <div class="wrapper-head">
            <h2 class="title">FieldWeb Addons</h2>
        </div>
        <div class="row text-center mt-5">
            <div class="col-md-4">
                <img src="assets/images/whatsapp-icon2.svg" />
                <p>Whatsapp Business API</p>
            </div>
            <div class="col-md-4">
                <img src="assets/images/dnd-icon.svg" />
                <p>Whatsapp Business API</p>
            </div>
            <div class="col-md-4">
                <img src="assets/images/customer-app-icon.svg" />
                <p>Whatsapp Business API</p>
            </div>
        </div>
        <div class="mt-5 text-left">
            <a data-bs-toggle="modal" data-bs-target="#mdl_contactsales" class="btn-red arrowBtn u-button has-hover m-auto">
                <span class="u-button-arrow"></span>
                <span>Contact Sales</span>
            </a>
        </div>
    </div>
</section>
<!----------One App To Replace----------->
<section class="main-Wrapper sect-oneapp margin-btm" data-aos="fade-up">
    <div class="text-center margin-sm-btm">
        <h2 class="title">One App To Replace Them All</h2>
        <p class="title-sm-red">All your work in one place :</p>
    </div>
    <div class="grid-list margin-btm">
        <div class="row text-center mt-5">
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
                <div class="d-flex align-items-center text-start gap-3">
                    <img src="assets/images/features/manualjob_allocation.svg" />
                    <p>Manual Job Allocation</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
                <div class="d-flex align-items-center text-start gap-3">
                    <img src="assets/images/features/sheets.svg" />
                    <p>Sheets</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
                <div class="d-flex align-items-center text-start gap-3">
                    <img src="assets/images/features/documents.svg" />
                    <p>Documents</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
                <div class="d-flex align-items-center text-start gap-3">
                    <img src="assets/images/features/chats.svg" />
                    <p>Chats</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
                <div class="d-flex align-items-center text-start gap-3">
                    <img src="assets/images/features/ledger_book.svg" />
                    <p>Ledger Book</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
                <div class="d-flex align-items-center text-start gap-3">
                    <img src="assets/images/features/expense_bill.svg" />
                    <p>Expense Bills</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
                <div class="d-flex align-items-center text-start gap-3">
                    <img src="assets/images/features/attendance_register.svg" />
                    <p>Attendance Register</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
                <div class="d-flex align-items-center text-start gap-3">
                    <img src="assets/images/features/gps.svg" />
                    <p>GPS</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
                <div class="d-flex align-items-center text-start gap-3">
                    <img src="assets/images/features/tools_checklist.svg" />
                    <p>Tools Checklist</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
                <div class="d-flex align-items-center text-start gap-3">
                    <img src="assets/images/features/asset_counting.svg" />
                    <p>Asset Counting</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
                <div class="d-flex align-items-center text-start gap-3">
                    <img src="assets/images/features/calls.svg" />
                    <p>Calls</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-3">
                <div class="d-flex align-items-center text-start gap-3">
                    <img src="assets/images/features/amc_markup.svg" />
                    <p>AMC Markup</p>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-center-flex">
        <a data-bs-toggle="modal" data-bs-target="#getdemoModal" class="btn-red arrowBtn u-button has-hover mt-4">
            <span class="u-button-arrow"></span>
            <span>Book a Slot</span>
        </a>
    </div>
</section>
<section class="mt-8 margin-btm" data-aos="fade-up">
    <div class="container">
        <div class="text-center">
            <h2 class="title-semibold">Over 10,000+ Customer Worldwide<h2>
        </div>
        <div class="owl-carousel owl-theme mt-4" id="TrustedCompaniesCarousel">
            <div class="item">
                <img src="assets/images/gopienterprises.svg" class="partner-img">
            </div>
            <div class="item">
                <img src="assets/images/nextgenlogo.svg" class="partner-img">
            </div>
            <div class="item">
                <img src="assets/images/njclogo.svg" class="partner-img">
            </div>
            <div class="item">
                <img src="assets/images/gopienterprises.svg" class="partner-img">
            </div>
            <div class="item">
                <img src="assets/images/nextgenlogo.svg" class="partner-img">
            </div>
            <div class="item">
                <img src="assets/images/njclogo.svg" class="partner-img">
            </div>
        </div>
        <div class="owl-carousel owl-theme mt-4" id="TrustedCompaniesCarousel2">
            <div class="item">
                <img src="assets/images/gopienterprises.svg" class="partner-img">
            </div>
            <div class="item">
                <img src="assets/images/nextgenlogo.svg" class="partner-img">
            </div>
            <div class="item">
                <img src="assets/images/njclogo.svg" class="partner-img">
            </div>
            <div class="item">
                <img src="assets/images/gopienterprises.svg" class="partner-img">
            </div>
            <div class="item">
                <img src="assets/images/nextgenlogo.svg" class="partner-img">
            </div>
            <div class="item">
                <img src="assets/images/njclogo.svg" class="partner-img">
            </div>
        </div>
    </div>
</section>
<section class="mt-8 margin-btm" data-aos="fade-up">
    <div class="wrapper-head">
        <p class="title-red">OUR POWERFUL FEATURES</p>
        <h2 class="title">Frequently Asked Questions</h2>
    </div>
    <div class="main-Wrapper mt-5">
        <div class="accordion accordion-flush" id="accordionfaq">
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseOne" aria-expanded="false" aria-controls="faq-collapseOne">
                        What is the pricing structure for FieldWeb?
                    </button>
                </h2>
                <div id="faq-collapseOne" class="accordion-collapse collapse" aria-labelledby="faq-headingOne" data-bs-parent="#accordionfaq">
                    <div class="accordion-body">
                       FieldWeb offers flexible pricing options tailored to your business needs. Our pricing can vary based on factors such as the number of users, features required, and the size of your organization.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseTwo" aria-expanded="false" aria-controls="faq-collapseTwo">
                        Is there a limit to the number of users I can add to FieldWeb?
                    </button>
                </h2>
                <div id="faq-collapseTwo" class="accordion-collapse collapse" aria-labelledby="faq-headingTwo" data-bs-parent="#accordionfaq">
                    <div class="accordion-body">
                    FieldWeb's pricing plans accommodate businesses of all sizes. We have plans designed for small businesses with a limited number of users, as well as plans that can scale to meet the needs of larger organizations. You can choose a plan that suits your user requirements.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseThree" aria-expanded="false" aria-controls="faq-collapseThree">
                        Are there any hidden fees or long-term contracts?
                    </button>
                </h2>
                <div id="faq-collapseThree" class="accordion-collapse collapse" aria-labelledby="faq-headingThree" data-bs-parent="#accordionfaq">
                    <div class="accordion-body">
                        No, there are no hidden fees with FieldWeb. We believe in transparency. Our pricing is straightforward, and you won't encounter unexpected charges. Additionally, we offer flexible billing options, including monthly and annual plans, without requiring long-term contracts.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseFour" aria-expanded="false" aria-controls="faq-collapseFour">
                        Can I upgrade or downgrade my plan as my business grows?
                    </button>
                </h2>
                <div id="faq-collapseFour" class="accordion-collapse collapse" aria-labelledby="faq-headingFour" data-bs-parent="#accordionfaq">
                    <div class="accordion-body">
                       Yes, you can upgrade or downgrade your FieldWeb plan at any time. We understand that your business needs may evolve, and our flexible plans allow you to adjust accordingly. You can seamlessly switch between plans to accommodate changes in your user count or feature requirements.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseFive" aria-expanded="false" aria-controls="faq-collapseFive">
                        Do you provide customer support with your pricing plans?
                    </button>
                </h2>
                <div id="faq-collapseFive" class="accordion-collapse collapse" aria-labelledby="faq-headingFive" data-bs-parent="#accordionfaq">
                    <div class="accordion-body">
                       Yes, customer support is an integral part of our pricing plans. We offer various support options, including email and phone support, to assist you in using FieldWeb effectively. Our team is dedicated to ensuring you get the most out of our software.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq-headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseSix" aria-expanded="false" aria-controls="faq-collapseSix">
                        What are your billing options?
                    </button>
                </h2>
                <div id="faq-collapseSix" class="accordion-collapse collapse" aria-labelledby="faq-headingSix" data-bs-parent="#accordionfaq">
                    <div class="accordion-body">
                        FieldWeb offers annual billing for all our pricing plans. We do not provide monthly billing options. This annual billing ensures that you have uninterrupted access to our platform throughout the year, allowing you to streamline your operations consistently.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="text-center mt-10 margin-btm" data-aos="fade-up">
    <div class="main-Wrapper sect-trustedby">
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="title-md">IN 7 YEARS OF EXPERIENCE</p>
                <h4 class="title pt-2">Trusted By </h4>
                <h3 class="red-title-bold drawn-underline"><span class="count">10000</span>+ Users</h3>
            </div>
            <div class="col-md-6">
                <div class="sect_trustedbrands">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-4">
                            <img src="assets/images/trusted-icons/capeterra-01.svg" class="img-fluid">
                        </div>
                        <div class="col-md-3 col-sm-4 col-4">
                            <img src="assets/images/trusted-icons/customer support logo-01.svg" class="img-fluid">
                        </div>
                        <div class="col-md-3 col-sm-4 col-4">
                            <img src="assets/images/trusted-icons/EASENOF USE-01.svg" class="img-fluid">
                        </div>
                        <div class="col-md-3 col-sm-4 col-4">
                            <img src="assets/images/trusted-icons/FUNCTIONALITY-01.svg" class="img-fluid">
                        </div>
                        <div class="col-md-3 col-sm-4 col-4">
                            <img src="assets/images/trusted-icons/get up logo-01-01.svg" class="img-fluid">
                        </div>
                        <div class="col-md-3 col-sm-4 col-4">
                            <img src="assets/images/trusted-icons/leader summer-01.svg" class="img-fluid">
                        </div>
                        <div class="col-md-3 col-sm-4 col-4">
                            <img src="assets/images/trusted-icons/product advise logo-01.svg" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!----------get demo----------->
<section class="sect-demo mt-20 pb-5" data-aos="fade-up">
    <div class="block-lightorange">
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="subtitle">LEADING All -IN ONE SOFTWARE</p>
                <h2 class="black-xl-title mt-3 mb-4">Book your <span class="drawn-underline">Personalized</span> Demo to learn more</h2>
                <p class="subtext">Explore why 1000 + service professional trust FieldWeb to run their business.</p>
            </div>
            <div class="col-md-5 ms-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="modal-header">
                            <h6 class="title-poppins-sbold">Request a personalized demo</h6>
                        </div>
                        <div class="row mb-3 mt-3">
                            <div class="col-md-12">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control mt-2" placeholder="First Name">
                            </div>
                            <div class="col-md-12">
                                <input type="number" class="form-control mt-2" placeholder="Mobile Number*">
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control mt-2" placeholder="Company Name*">
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="grey-ouline-block">
                                    <div class="d-flex-common">
                                        <p class="black-sm-title">Select Industry</p>
                                        <img src="assets/images/rightarrow.svg" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="grey-ouline-block">
                                    <div class="d-flex-common">
                                        <p class="black-sm-title">Select Number of Techs</p>
                                        <img src="assets/images/rightarrow.svg" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-3 mt-4">
                            <a class="btn-red arrowBtn u-button has-hover m-auto">
                                <span class="u-button-arrow"></span>
                                <span>SUBMIT</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include_once 'footer.php';
?>