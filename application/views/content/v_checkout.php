
<div class="extended-container">
<div id="container" class="j-container">

<div id="notification"></div><div id="container" class="container j-container">
    <ul class="breadcrumb">
                    <li><a href="<?=base_url()?>">Home</a></li>
                    <li><a href="<?=base_url()?>cart">Shopping Cart</a></li>
                    <li><a href="<?=base_url()?>checkout">Checkout</a></li>
            </ul>
        <div class="row"> 
                                    <div id="content" class="one-page-checkout col-sm-9">
            <h1 class="heading-title">Quick Checkout</h1>
            
            <div class="journal-checkout">
                <div class="left">
                                        <div class="checkout-content login-box">
                        <h2 class="secondary-title">Create an Account or Login</h2>
                        <div class="radio">
                            <label>
                                <input type="radio" name="account" value="register"  checked="checked"  />
                                Register Account                            </label>
                        </div>
                                                <div class="radio">
                            <label>
                                <input type="radio" name="account" value="guest"  />
                                Guest Checkout                            </label>
                        </div>
                                                <div class="radio">
                            <label>
                                <input type="radio" name="account" value="login" />
                                Returning Customer                            </label>
                        </div>
                    </div>
                    <script>
                         $(document).delegate('input[name="shipping_address"]', 'change', function() {
                             var $this = $(this);

                             if ($this.is(':checked')) {
                                 $('#shipping-address').hide();
                                 $this.val(1);
                                 $(document).trigger('journal_checkout_address_changed', 'payment');
                             } else {
                                 $('#shipping-address').show().find('input[type="text"]').val('');
                                 $(document).trigger('journal_checkout_address_changed', 'payment');
                                 $(document).trigger('journal_checkout_address_changed', 'shipping');
                                 $this.val(0);
                             }
                         });
                         $(document).delegate('input[name="account"]', 'change', function() {
                             if (this.value === 'login') {
                                 $('.checkout-login').slideDown(300);
                                 $('.checkout-register').addClass('checkout-loading').parent().addClass('login-mobile');
                                 //$('.checkout-register').slideUp(300);
                             } else {
                                 $('.checkout-login').slideUp(300);
                                 $('.checkout-register').removeClass('checkout-loading').parent().removeClass('login-mobile');
                                 //$('.checkout-register').slideDown(300);
                                 if (this.value === 'register') {
                                     $('#password').slideDown(300);
                                 } else {
                                     $('#password').slideUp(300);
                                 }
                             }
                         });
                    </script>
                    
                                        <div class="checkout-content checkout-login">
                        <fieldset>
                            <h2 class="secondary-title">Returning Customer</h2>
                            <div class="form-group">
                                <label class="control-label" for="input-login_email">E-Mail:</label>
                                <input type="text" name="login_email" value="" placeholder="E-Mail:" id="input-login_email" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="input-login_password">Password:</label>
                                <input type="password" name="login_password" value="" placeholder="Password:" id="input-login_password" class="form-control" />
                                <a href="https://www.innotek.com.pk/index.php?route=account/forgotten">Forgotten Password</a>
                            </div>
                            <div class="form-group">
                                <input type="button" value="Login" id="button-login" data-loading-text="text_loading" class="btn-primary button" />
                            </div>
                        </fieldset>
                    </div>

                    <div class="checkout-content checkout-register">
    <fieldset id="account">
        <h2 class="secondary-title">Your Personal Details</h2>

        <div class="form-group customer-group" style="display: none;">
            <label class="control-label">Business Type:</label>
                                                <div class="radio">
                        <label>
                            <input type="radio" name="customer_group_id"
                                   value="1" checked="checked"/>
                            Default</label>
                    </div>
                                    </div>
        <div class="form-group required">
            <label class="control-label" for="input-payment-firstname">First Name:</label>
            <input type="text" name="firstname" value="" placeholder="First Name:"
                   id="input-payment-firstname" class="form-control"/>
        </div>
        <div class="form-group required">
            <label class="control-label" for="input-payment-lastname">Last Name:</label>
            <input type="text" name="lastname" value="" placeholder="Last Name:"
                   id="input-payment-lastname" class="form-control"/>
        </div>
        <div class="form-group required">
            <label class="control-label" for="input-payment-email">E-Mail:</label>
            <input type="text" name="email" value="" placeholder="E-Mail:"
                   id="input-payment-email" class="form-control"/>
        </div>
        <div class="form-group required">
            <label class="control-label" for="input-payment-telephone">Telephone:</label>
            <input type="text" name="telephone" value="" placeholder="Telephone:"
                   id="input-payment-telephone" class="form-control"/>
        </div>
        <div class="form-group fax-input">
            <label class="control-label" for="input-payment-fax">Fax:</label>
            <input type="text" name="fax" value="" placeholder="Fax:" id="input-payment-fax"
                   class="form-control"/>
        </div>
            </fieldset>
    <fieldset id="password">
        <h2 class="secondary-title">Your Password</h2>

        <div class="form-group required">
            <label class="control-label" for="input-payment-password">Password:</label>
            <input type="password" name="password" value="" placeholder="Password:"
                   id="input-payment-password" class="form-control"/>
        </div>
        <div class="form-group required">
            <label class="control-label" for="input-payment-confirm">Password Confirm:</label>
            <input type="password" name="confirm" value="" placeholder="Password Confirm:"
                   id="input-payment-confirm" class="form-control"/>
        </div>
    </fieldset>
    <fieldset id="address">
        <h2 class="secondary-title">Your Address</h2>
        <div class=" checkout-payment-form">
        <form class="form-horizontal form-payment">
                <div id="payment-new" style="display: block;">
                        <div class="form-group company-input">
                <label class="col-sm-2 control-label" for="input-payment-company">Company:</label>

                    <input type="text" name="payment_company" value="" placeholder="Company:"
                           id="input-payment-company" class="form-control"/>
            </div>
                  <div class="form-group company_id-input">
        <label class="col-sm-2 control-label" for="input-payment-company_id">Company ID:</label>

        <input type="text" name="payment_company_id" value="" placeholder="Company ID:"
             id="input-payment-company_id" class="form-control"/>
      </div>
            <div class="form-group tax_id-input">
                <label class="col-sm-2 control-label" for="input-payment-tax_id">Tax ID:</label>

                <input type="text" name="payment_tax_id" value="" placeholder="Tax ID:"
                       id="input-payment-tax_id" class="form-control"/>
            </div>
                        <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-payment-address-1">Address 1:</label>

                    <input type="text" name="payment_address_1" value="" placeholder="Address 1:"
                           id="input-payment-address-1" class="form-control"/>
            </div>
            <div class="form-group address-2-input">
                <label class="col-sm-2 control-label" for="input-payment-address-2">Address 2:</label>

                    <input type="text" name="payment_address_2" value="" placeholder="Address 2:"
                           id="input-payment-address-2" class="form-control"/>
            </div>
            <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-payment-city">City:</label>

                    <input type="text" name="payment_city" value="" placeholder="City:" id="input-payment-city"
                           class="form-control"/>
            </div>
            <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-payment-postcode">Post Code:</label>

                    <input type="text" name="payment_postcode" value="" placeholder="Post Code:"
                           id="input-payment-postcode" class="form-control"/>
            </div>
            <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-payment-country">Country:</label>
                <div class="col-sm-10">

                    <select name="payment_country_id" id="input-payment-country" class="form-control">
                        <option value=""> --- Please Select --- </option>
                                                                                    <option
                                    value="244">Aaland Islands</option>
                                                                                                                <option
                                    value="1">Afghanistan</option>
                                                                                                                <option
                                    value="2">Albania</option>
                                                                                                                <option
                                    value="3">Algeria</option>
                                                                                                                <option
                                    value="4">American Samoa</option>
                                                                                                                <option
                                    value="5">Andorra</option>
                                                                                                                <option
                                    value="6">Angola</option>
                                                                                                                <option
                                    value="7">Anguilla</option>
                                                                                                                <option
                                    value="8">Antarctica</option>
                                                                                                                <option
                                    value="9">Antigua and Barbuda</option>
                                                                                                                <option
                                    value="10">Argentina</option>
                                                                                                                <option
                                    value="11">Armenia</option>
                                                                                                                <option
                                    value="12">Aruba</option>
                                                                                                                <option
                                    value="13">Australia</option>
                                                                                                                <option
                                    value="14">Austria</option>
                                                                                                                <option
                                    value="15">Azerbaijan</option>
                                                                                                                <option
                                    value="16">Bahamas</option>
                                                                                                                <option
                                    value="17">Bahrain</option>
                                                                                                                <option
                                    value="18">Bangladesh</option>
                                                                                                                <option
                                    value="19">Barbados</option>
                                                                                                                <option
                                    value="20">Belarus</option>
                                                                                                                <option
                                    value="21">Belgium</option>
                                                                                                                <option
                                    value="22">Belize</option>
                                                                                                                <option
                                    value="23">Benin</option>
                                                                                                                <option
                                    value="24">Bermuda</option>
                                                                                                                <option
                                    value="25">Bhutan</option>
                                                                                                                <option
                                    value="26">Bolivia</option>
                                                                                                                <option
                                    value="245">Bonaire, Sint Eustatius and Saba</option>
                                                                                                                <option
                                    value="27">Bosnia and Herzegovina</option>
                                                                                                                <option
                                    value="28">Botswana</option>
                                                                                                                <option
                                    value="29">Bouvet Island</option>
                                                                                                                <option
                                    value="30">Brazil</option>
                                                                                                                <option
                                    value="31">British Indian Ocean Territory</option>
                                                                                                                <option
                                    value="32">Brunei Darussalam</option>
                                                                                                                <option
                                    value="33">Bulgaria</option>
                                                                                                                <option
                                    value="34">Burkina Faso</option>
                                                                                                                <option
                                    value="35">Burundi</option>
                                                                                                                <option
                                    value="36">Cambodia</option>
                                                                                                                <option
                                    value="37">Cameroon</option>
                                                                                                                <option
                                    value="38">Canada</option>
                                                                                                                <option
                                    value="251">Canary Islands</option>
                                                                                                                <option
                                    value="39">Cape Verde</option>
                                                                                                                <option
                                    value="40">Cayman Islands</option>
                                                                                                                <option
                                    value="41">Central African Republic</option>
                                                                                                                <option
                                    value="42">Chad</option>
                                                                                                                <option
                                    value="43">Chile</option>
                                                                                                                <option
                                    value="44">China</option>
                                                                                                                <option
                                    value="45">Christmas Island</option>
                                                                                                                <option
                                    value="46">Cocos (Keeling) Islands</option>
                                                                                                                <option
                                    value="47">Colombia</option>
                                                                                                                <option
                                    value="48">Comoros</option>
                                                                                                                <option
                                    value="49">Congo</option>
                                                                                                                <option
                                    value="50">Cook Islands</option>
                                                                                                                <option
                                    value="51">Costa Rica</option>
                                                                                                                <option
                                    value="52">Cote D'Ivoire</option>
                                                                                                                <option
                                    value="53">Croatia</option>
                                                                                                                <option
                                    value="54">Cuba</option>
                                                                                                                <option
                                    value="246">Curacao</option>
                                                                                                                <option
                                    value="55">Cyprus</option>
                                                                                                                <option
                                    value="56">Czech Republic</option>
                                                                                                                <option
                                    value="237">Democratic Republic of Congo</option>
                                                                                                                <option
                                    value="57">Denmark</option>
                                                                                                                <option
                                    value="58">Djibouti</option>
                                                                                                                <option
                                    value="59">Dominica</option>
                                                                                                                <option
                                    value="60">Dominican Republic</option>
                                                                                                                <option
                                    value="61">East Timor</option>
                                                                                                                <option
                                    value="62">Ecuador</option>
                                                                                                                <option
                                    value="63">Egypt</option>
                                                                                                                <option
                                    value="64">El Salvador</option>
                                                                                                                <option
                                    value="65">Equatorial Guinea</option>
                                                                                                                <option
                                    value="66">Eritrea</option>
                                                                                                                <option
                                    value="67">Estonia</option>
                                                                                                                <option
                                    value="68">Ethiopia</option>
                                                                                                                <option
                                    value="69">Falkland Islands (Malvinas)</option>
                                                                                                                <option
                                    value="70">Faroe Islands</option>
                                                                                                                <option
                                    value="71">Fiji</option>
                                                                                                                <option
                                    value="72">Finland</option>
                                                                                                                <option
                                    value="74">France, Metropolitan</option>
                                                                                                                <option
                                    value="75">French Guiana</option>
                                                                                                                <option
                                    value="76">French Polynesia</option>
                                                                                                                <option
                                    value="77">French Southern Territories</option>
                                                                                                                <option
                                    value="126">FYROM</option>
                                                                                                                <option
                                    value="78">Gabon</option>
                                                                                                                <option
                                    value="79">Gambia</option>
                                                                                                                <option
                                    value="80">Georgia</option>
                                                                                                                <option
                                    value="81">Germany</option>
                                                                                                                <option
                                    value="82">Ghana</option>
                                                                                                                <option
                                    value="83">Gibraltar</option>
                                                                                                                <option
                                    value="84">Greece</option>
                                                                                                                <option
                                    value="85">Greenland</option>
                                                                                                                <option
                                    value="86">Grenada</option>
                                                                                                                <option
                                    value="87">Guadeloupe</option>
                                                                                                                <option
                                    value="88">Guam</option>
                                                                                                                <option
                                    value="89">Guatemala</option>
                                                                                                                <option
                                    value="241">Guernsey</option>
                                                                                                                <option
                                    value="90">Guinea</option>
                                                                                                                <option
                                    value="91">Guinea-Bissau</option>
                                                                                                                <option
                                    value="92">Guyana</option>
                                                                                                                <option
                                    value="93">Haiti</option>
                                                                                                                <option
                                    value="94">Heard and Mc Donald Islands</option>
                                                                                                                <option
                                    value="95">Honduras</option>
                                                                                                                <option
                                    value="96">Hong Kong</option>
                                                                                                                <option
                                    value="97">Hungary</option>
                                                                                                                <option
                                    value="98">Iceland</option>
                                                                                                                <option
                                    value="99">India</option>
                                                                                                                <option
                                    value="100">Indonesia</option>
                                                                                                                <option
                                    value="101">Iran (Islamic Republic of)</option>
                                                                                                                <option
                                    value="102">Iraq</option>
                                                                                                                <option
                                    value="103">Ireland</option>
                                                                                                                <option
                                    value="104">Israel</option>
                                                                                                                <option
                                    value="105">Italy</option>
                                                                                                                <option
                                    value="106">Jamaica</option>
                                                                                                                <option
                                    value="107">Japan</option>
                                                                                                                <option
                                    value="240">Jersey</option>
                                                                                                                <option
                                    value="108">Jordan</option>
                                                                                                                <option
                                    value="109">Kazakhstan</option>
                                                                                                                <option
                                    value="110">Kenya</option>
                                                                                                                <option
                                    value="111">Kiribati</option>
                                                                                                                <option
                                    value="113">Korea, Republic of</option>
                                                                                                                <option
                                    value="114">Kuwait</option>
                                                                                                                <option
                                    value="115">Kyrgyzstan</option>
                                                                                                                <option
                                    value="116">Lao People's Democratic Republic</option>
                                                                                                                <option
                                    value="117">Latvia</option>
                                                                                                                <option
                                    value="118">Lebanon</option>
                                                                                                                <option
                                    value="119">Lesotho</option>
                                                                                                                <option
                                    value="120">Liberia</option>
                                                                                                                <option
                                    value="121">Libyan Arab Jamahiriya</option>
                                                                                                                <option
                                    value="122">Liechtenstein</option>
                                                                                                                <option
                                    value="123">Lithuania</option>
                                                                                                                <option
                                    value="124">Luxembourg</option>
                                                                                                                <option
                                    value="125">Macau</option>
                                                                                                                <option
                                    value="127">Madagascar</option>
                                                                                                                <option
                                    value="128">Malawi</option>
                                                                                                                <option
                                    value="129">Malaysia</option>
                                                                                                                <option
                                    value="130">Maldives</option>
                                                                                                                <option
                                    value="131">Mali</option>
                                                                                                                <option
                                    value="132">Malta</option>
                                                                                                                <option
                                    value="133">Marshall Islands</option>
                                                                                                                <option
                                    value="134">Martinique</option>
                                                                                                                <option
                                    value="135">Mauritania</option>
                                                                                                                <option
                                    value="136">Mauritius</option>
                                                                                                                <option
                                    value="137">Mayotte</option>
                                                                                                                <option
                                    value="138">Mexico</option>
                                                                                                                <option
                                    value="139">Micronesia, Federated States of</option>
                                                                                                                <option
                                    value="140">Moldova, Republic of</option>
                                                                                                                <option
                                    value="141">Monaco</option>
                                                                                                                <option
                                    value="142">Mongolia</option>
                                                                                                                <option
                                    value="242">Montenegro</option>
                                                                                                                <option
                                    value="143">Montserrat</option>
                                                                                                                <option
                                    value="144">Morocco</option>
                                                                                                                <option
                                    value="145">Mozambique</option>
                                                                                                                <option
                                    value="146">Myanmar</option>
                                                                                                                <option
                                    value="147">Namibia</option>
                                                                                                                <option
                                    value="148">Nauru</option>
                                                                                                                <option
                                    value="149">Nepal</option>
                                                                                                                <option
                                    value="150">Netherlands</option>
                                                                                                                <option
                                    value="151">Netherlands Antilles</option>
                                                                                                                <option
                                    value="152">New Caledonia</option>
                                                                                                                <option
                                    value="153">New Zealand</option>
                                                                                                                <option
                                    value="154">Nicaragua</option>
                                                                                                                <option
                                    value="155">Niger</option>
                                                                                                                <option
                                    value="156">Nigeria</option>
                                                                                                                <option
                                    value="157">Niue</option>
                                                                                                                <option
                                    value="158">Norfolk Island</option>
                                                                                                                <option
                                    value="112">North Korea</option>
                                                                                                                <option
                                    value="159">Northern Mariana Islands</option>
                                                                                                                <option
                                    value="160">Norway</option>
                                                                                                                <option
                                    value="161">Oman</option>
                                                                                                                <option value="162"
                                        selected="selected">Pakistan</option>
                                                                                                                <option
                                    value="163">Palau</option>
                                                                                                                <option
                                    value="247">Palestinian Territory, Occupied</option>
                                                                                                                <option
                                    value="164">Panama</option>
                                                                                                                <option
                                    value="165">Papua New Guinea</option>
                                                                                                                <option
                                    value="166">Paraguay</option>
                                                                                                                <option
                                    value="167">Peru</option>
                                                                                                                <option
                                    value="168">Philippines</option>
                                                                                                                <option
                                    value="169">Pitcairn</option>
                                                                                                                <option
                                    value="170">Poland</option>
                                                                                                                <option
                                    value="171">Portugal</option>
                                                                                                                <option
                                    value="172">Puerto Rico</option>
                                                                                                                <option
                                    value="173">Qatar</option>
                                                                                                                <option
                                    value="174">Reunion</option>
                                                                                                                <option
                                    value="175">Romania</option>
                                                                                                                <option
                                    value="176">Russian Federation</option>
                                                                                                                <option
                                    value="177">Rwanda</option>
                                                                                                                <option
                                    value="178">Saint Kitts and Nevis</option>
                                                                                                                <option
                                    value="179">Saint Lucia</option>
                                                                                                                <option
                                    value="180">Saint Vincent and the Grenadines</option>
                                                                                                                <option
                                    value="181">Samoa</option>
                                                                                                                <option
                                    value="182">San Marino</option>
                                                                                                                <option
                                    value="183">Sao Tome and Principe</option>
                                                                                                                <option
                                    value="184">Saudi Arabia</option>
                                                                                                                <option
                                    value="185">Senegal</option>
                                                                                                                <option
                                    value="243">Serbia</option>
                                                                                                                <option
                                    value="186">Seychelles</option>
                                                                                                                <option
                                    value="187">Sierra Leone</option>
                                                                                                                <option
                                    value="188">Singapore</option>
                                                                                                                <option
                                    value="189">Slovak Republic</option>
                                                                                                                <option
                                    value="190">Slovenia</option>
                                                                                                                <option
                                    value="191">Solomon Islands</option>
                                                                                                                <option
                                    value="192">Somalia</option>
                                                                                                                <option
                                    value="193">South Africa</option>
                                                                                                                <option
                                    value="194">South Georgia &amp; South Sandwich Islands</option>
                                                                                                                <option
                                    value="248">South Sudan</option>
                                                                                                                <option
                                    value="195">Spain</option>
                                                                                                                <option
                                    value="196">Sri Lanka</option>
                                                                                                                <option
                                    value="249">St. Barthelemy</option>
                                                                                                                <option
                                    value="197">St. Helena</option>
                                                                                                                <option
                                    value="250">St. Martin (French part)</option>
                                                                                                                <option
                                    value="198">St. Pierre and Miquelon</option>
                                                                                                                <option
                                    value="199">Sudan</option>
                                                                                                                <option
                                    value="200">Suriname</option>
                                                                                                                <option
                                    value="201">Svalbard and Jan Mayen Islands</option>
                                                                                                                <option
                                    value="202">Swaziland</option>
                                                                                                                <option
                                    value="203">Sweden</option>
                                                                                                                <option
                                    value="204">Switzerland</option>
                                                                                                                <option
                                    value="205">Syrian Arab Republic</option>
                                                                                                                <option
                                    value="206">Taiwan</option>
                                                                                                                <option
                                    value="207">Tajikistan</option>
                                                                                                                <option
                                    value="208">Tanzania, United Republic of</option>
                                                                                                                <option
                                    value="209">Thailand</option>
                                                                                                                <option
                                    value="210">Togo</option>
                                                                                                                <option
                                    value="211">Tokelau</option>
                                                                                                                <option
                                    value="212">Tonga</option>
                                                                                                                <option
                                    value="213">Trinidad and Tobago</option>
                                                                                                                <option
                                    value="214">Tunisia</option>
                                                                                                                <option
                                    value="215">Turkey</option>
                                                                                                                <option
                                    value="216">Turkmenistan</option>
                                                                                                                <option
                                    value="217">Turks and Caicos Islands</option>
                                                                                                                <option
                                    value="218">Tuvalu</option>
                                                                                                                <option
                                    value="219">Uganda</option>
                                                                                                                <option
                                    value="220">Ukraine</option>
                                                                                                                <option
                                    value="221">United Arab Emirates</option>
                                                                                                                <option
                                    value="222">United Kingdom</option>
                                                                                                                <option
                                    value="223">United States</option>
                                                                                                                <option
                                    value="224">United States Minor Outlying Islands</option>
                                                                                                                <option
                                    value="225">Uruguay</option>
                                                                                                                <option
                                    value="226">Uzbekistan</option>
                                                                                                                <option
                                    value="227">Vanuatu</option>
                                                                                                                <option
                                    value="228">Vatican City State (Holy See)</option>
                                                                                                                <option
                                    value="229">Venezuela</option>
                                                                                                                <option
                                    value="230">Viet Nam</option>
                                                                                                                <option
                                    value="231">Virgin Islands (British)</option>
                                                                                                                <option
                                    value="232">Virgin Islands (U.S.)</option>
                                                                                                                <option
                                    value="233">Wallis and Futuna Islands</option>
                                                                                                                <option
                                    value="234">Western Sahara</option>
                                                                                                                <option
                                    value="235">Yemen</option>
                                                                                                                <option
                                    value="238">Zambia</option>
                                                                                                                <option
                                    value="239">Zimbabwe</option>
                                                                        </select>
                    </div>
            </div>
            <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-payment-zone">Region / State:</label>
                <div class="col-sm-10">

                <select name="payment_zone_id" id="input-payment-zone" class="form-control">
                    </select>
                    </div>
            </div>
                    </div>
    </form>
    <script>
        // $('form.form-payment input[name="payment_address"]').change(function () {
        //     if (this.value == 'new') {
        //         $('#payment-existing').hide();
        //         $('#payment-new').show().find('input[type="text"]').val('');
        //     } else {
        //         $('#payment-existing').show();
        //         $('#payment-new').hide();
        //     }
        //     $(document).trigger('journal_checkout_address_changed', 'payment');
        // });

        // $('form.form-payment select[name=\'payment_country_id\']').on('change', function(e, first) {
        //     if (!this.value) return;
        //     $.ajax({
        //         url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
        //         dataType: 'json',
        //         beforeSend: function() {
        //             $('form.form-payment select[name=\'payment_country_id\']').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');
        //         },
        //         complete: function() {
        //             $('.fa-spin').remove();
        //         },
        //         success: function(json) {
        //             $('.fa-spin').remove();

        //             if (json['postcode_required'] == '1') {
        //                 $('form.form-payment input[name=\'payment_postcode\']').parent().addClass('required');
        //             } else {
        //                 $('form.form-payment input[name=\'payment_postcode\']').parent().removeClass('required');
        //             }

        //             html = '<option value=""> --- Please Select --- </option>';

        //             if (json['zone'] != '') {
        //                 for (i = 0; i < json['zone'].length; i++) {
        //                     html += '<option value="' + json['zone'][i]['zone_id'] + '"';

        //                     if (json['zone'][i]['zone_id'] == '0') {
        //                         html += ' selected="selected"';
        //                     }

        //                     html += '>' + json['zone'][i]['name'] + '</option>';
        //                 }
        //             } else {
        //                 html += '<option value="0" selected="selected"> --- None --- </option>';
        //             }

        //             $('form.form-payment select[name=\'payment_zone_id\']').html(html);

        //             if (!first) {
        //                 $(document).trigger('journal_checkout_address_changed', 'payment');
        //             }
        //         },
        //         error: function(xhr, ajaxOptions, thrownError) {
        //             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        //         }
        //     });
        // }).trigger('change', true);

        // $('form.form-payment select[name=\'payment_zone_id\']').on('change', function() {
        //     $(document).trigger('journal_checkout_address_changed', 'payment');
        // });

        // $('form.form-payment select[name=\'payment_address_id\']').on('change', function() {
        //     $(document).trigger('journal_checkout_address_changed', 'payment');
        // });

        // var timeout_payment = null;

        // $('form.form-payment input[name=\'payment_postcode\']').on('keydown', function() {
        //     if (timeout_payment) {
        //         clearTimeout(timeout_payment);
        //     }
        //     timeout_payment = setTimeout(function () {
        //         $(document).trigger('journal_checkout_address_changed', 'payment');
        //     }, 500);
        // });
    </script>
    </div>    </fieldset>
        <div class="checkbox">
        <label>
                        <input type="checkbox" name="shipping_address" value="1" checked="checked" />
                        My delivery and billing addresses are the same.        </label>
    </div>
    <fieldset id="shipping-address" style="display: none">
        <h2 class="secondary-title">Shipping Address</h2>
        <div class=" checkout-shipping-form">
        <form class="form-horizontal form-shipping">
                <div id="shipping-new" style="display: block;">
                        <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-shipping-firstname">First Name:</label>

                    <input type="text" name="shipping_firstname" value="" placeholder="First Name:"
                           id="input-shipping-firstname" class="form-control"/>
            </div>
            <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-shipping-lastname">Last Name:</label>

                    <input type="text" name="shipping_lastname" value="" placeholder="Last Name:"
                           id="input-shipping-lastname" class="form-control"/>
            </div>
                        <div class="form-group company-input">
                <label class="col-sm-2 control-label" for="input-shipping-company">Company:</label>

                    <input type="text" name="shipping_company" value="" placeholder="Company:"
                           id="input-shipping-company" class="form-control"/>
            </div>
                  <div class="form-group company_id-input">
        <label class="col-sm-2 control-label" for="input-shipping-company_id">Company ID:</label>

        <input type="text" name="shipping_company_id" value="" placeholder="Company ID:"
             id="input-shipping-company_id" class="form-control"/>
      </div>
            <div class="form-group tax_id-input">
                <label class="col-sm-2 control-label" for="input-shipping-tax_id">Tax ID:</label>

                <input type="text" name="shipping_tax_id" value="" placeholder="Tax ID:"
                       id="input-shipping-tax_id" class="form-control"/>
            </div>
                        <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-shipping-address-1">Address 1:</label>

                    <input type="text" name="shipping_address_1" value="" placeholder="Address 1:"
                           id="input-shipping-address-1" class="form-control"/>
            </div>
            <div class="form-group address-2-input">
                <label class="col-sm-2 control-label" for="input-shipping-address-2">Address 2:</label>

                    <input type="text" name="shipping_address_2" value="" placeholder="Address 2:"
                           id="input-shipping-address-2" class="form-control"/>
            </div>
            <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-shipping-city">City:</label>

                    <input type="text" name="shipping_city" value="" placeholder="City:" id="input-shipping-city"
                           class="form-control"/>
            </div>
            <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-shipping-postcode">Post Code:</label>

                    <input type="text" name="shipping_postcode" value="" placeholder="Post Code:"
                           id="input-shipping-postcode" class="form-control"/>
            </div>
            <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-shipping-country">Country:</label>
                <div class="col-sm-10">

                    <select name="shipping_country_id" id="input-shipping-country" class="form-control">
                        <option value=""> --- Please Select --- </option>
                                                                                    <option
                                    value="244">Aaland Islands</option>
                                                                                                                <option
                                    value="1">Afghanistan</option>
                                                                                                                <option
                                    value="2">Albania</option>
                                                                                                                <option
                                    value="3">Algeria</option>
                                                                                                                <option
                                    value="4">American Samoa</option>
                                                                                                                <option
                                    value="5">Andorra</option>
                                                                                                                <option
                                    value="6">Angola</option>
                                                                                                                <option
                                    value="7">Anguilla</option>
                                                                                                                <option
                                    value="8">Antarctica</option>
                                                                                                                <option
                                    value="9">Antigua and Barbuda</option>
                                                                                                                <option
                                    value="10">Argentina</option>
                                                                                                                <option
                                    value="11">Armenia</option>
                                                                                                                <option
                                    value="12">Aruba</option>
                                                                                                                <option
                                    value="13">Australia</option>
                                                                                                                <option
                                    value="14">Austria</option>
                                                                                                                <option
                                    value="15">Azerbaijan</option>
                                                                                                                <option
                                    value="16">Bahamas</option>
                                                                                                                <option
                                    value="17">Bahrain</option>
                                                                                                                <option
                                    value="18">Bangladesh</option>
                                                                                                                <option
                                    value="19">Barbados</option>
                                                                                                                <option
                                    value="20">Belarus</option>
                                                                                                                <option
                                    value="21">Belgium</option>
                                                                                                                <option
                                    value="22">Belize</option>
                                                                                                                <option
                                    value="23">Benin</option>
                                                                                                                <option
                                    value="24">Bermuda</option>
                                                                                                                <option
                                    value="25">Bhutan</option>
                                                                                                                <option
                                    value="26">Bolivia</option>
                                                                                                                <option
                                    value="245">Bonaire, Sint Eustatius and Saba</option>
                                                                                                                <option
                                    value="27">Bosnia and Herzegovina</option>
                                                                                                                <option
                                    value="28">Botswana</option>
                                                                                                                <option
                                    value="29">Bouvet Island</option>
                                                                                                                <option
                                    value="30">Brazil</option>
                                                                                                                <option
                                    value="31">British Indian Ocean Territory</option>
                                                                                                                <option
                                    value="32">Brunei Darussalam</option>
                                                                                                                <option
                                    value="33">Bulgaria</option>
                                                                                                                <option
                                    value="34">Burkina Faso</option>
                                                                                                                <option
                                    value="35">Burundi</option>
                                                                                                                <option
                                    value="36">Cambodia</option>
                                                                                                                <option
                                    value="37">Cameroon</option>
                                                                                                                <option
                                    value="38">Canada</option>
                                                                                                                <option
                                    value="251">Canary Islands</option>
                                                                                                                <option
                                    value="39">Cape Verde</option>
                                                                                                                <option
                                    value="40">Cayman Islands</option>
                                                                                                                <option
                                    value="41">Central African Republic</option>
                                                                                                                <option
                                    value="42">Chad</option>
                                                                                                                <option
                                    value="43">Chile</option>
                                                                                                                <option
                                    value="44">China</option>
                                                                                                                <option
                                    value="45">Christmas Island</option>
                                                                                                                <option
                                    value="46">Cocos (Keeling) Islands</option>
                                                                                                                <option
                                    value="47">Colombia</option>
                                                                                                                <option
                                    value="48">Comoros</option>
                                                                                                                <option
                                    value="49">Congo</option>
                                                                                                                <option
                                    value="50">Cook Islands</option>
                                                                                                                <option
                                    value="51">Costa Rica</option>
                                                                                                                <option
                                    value="52">Cote D'Ivoire</option>
                                                                                                                <option
                                    value="53">Croatia</option>
                                                                                                                <option
                                    value="54">Cuba</option>
                                                                                                                <option
                                    value="246">Curacao</option>
                                                                                                                <option
                                    value="55">Cyprus</option>
                                                                                                                <option
                                    value="56">Czech Republic</option>
                                                                                                                <option
                                    value="237">Democratic Republic of Congo</option>
                                                                                                                <option
                                    value="57">Denmark</option>
                                                                                                                <option
                                    value="58">Djibouti</option>
                                                                                                                <option
                                    value="59">Dominica</option>
                                                                                                                <option
                                    value="60">Dominican Republic</option>
                                                                                                                <option
                                    value="61">East Timor</option>
                                                                                                                <option
                                    value="62">Ecuador</option>
                                                                                                                <option
                                    value="63">Egypt</option>
                                                                                                                <option
                                    value="64">El Salvador</option>
                                                                                                                <option
                                    value="65">Equatorial Guinea</option>
                                                                                                                <option
                                    value="66">Eritrea</option>
                                                                                                                <option
                                    value="67">Estonia</option>
                                                                                                                <option
                                    value="68">Ethiopia</option>
                                                                                                                <option
                                    value="69">Falkland Islands (Malvinas)</option>
                                                                                                                <option
                                    value="70">Faroe Islands</option>
                                                                                                                <option
                                    value="71">Fiji</option>
                                                                                                                <option
                                    value="72">Finland</option>
                                                                                                                <option
                                    value="74">France, Metropolitan</option>
                                                                                                                <option
                                    value="75">French Guiana</option>
                                                                                                                <option
                                    value="76">French Polynesia</option>
                                                                                                                <option
                                    value="77">French Southern Territories</option>
                                                                                                                <option
                                    value="126">FYROM</option>
                                                                                                                <option
                                    value="78">Gabon</option>
                                                                                                                <option
                                    value="79">Gambia</option>
                                                                                                                <option
                                    value="80">Georgia</option>
                                                                                                                <option
                                    value="81">Germany</option>
                                                                                                                <option
                                    value="82">Ghana</option>
                                                                                                                <option
                                    value="83">Gibraltar</option>
                                                                                                                <option
                                    value="84">Greece</option>
                                                                                                                <option
                                    value="85">Greenland</option>
                                                                                                                <option
                                    value="86">Grenada</option>
                                                                                                                <option
                                    value="87">Guadeloupe</option>
                                                                                                                <option
                                    value="88">Guam</option>
                                                                                                                <option
                                    value="89">Guatemala</option>
                                                                                                                <option
                                    value="241">Guernsey</option>
                                                                                                                <option
                                    value="90">Guinea</option>
                                                                                                                <option
                                    value="91">Guinea-Bissau</option>
                                                                                                                <option
                                    value="92">Guyana</option>
                                                                                                                <option
                                    value="93">Haiti</option>
                                                                                                                <option
                                    value="94">Heard and Mc Donald Islands</option>
                                                                                                                <option
                                    value="95">Honduras</option>
                                                                                                                <option
                                    value="96">Hong Kong</option>
                                                                                                                <option
                                    value="97">Hungary</option>
                                                                                                                <option
                                    value="98">Iceland</option>
                                                                                                                <option
                                    value="99">India</option>
                                                                                                                <option
                                    value="100">Indonesia</option>
                                                                                                                <option
                                    value="101">Iran (Islamic Republic of)</option>
                                                                                                                <option
                                    value="102">Iraq</option>
                                                                                                                <option
                                    value="103">Ireland</option>
                                                                                                                <option
                                    value="104">Israel</option>
                                                                                                                <option
                                    value="105">Italy</option>
                                                                                                                <option
                                    value="106">Jamaica</option>
                                                                                                                <option
                                    value="107">Japan</option>
                                                                                                                <option
                                    value="240">Jersey</option>
                                                                                                                <option
                                    value="108">Jordan</option>
                                                                                                                <option
                                    value="109">Kazakhstan</option>
                                                                                                                <option
                                    value="110">Kenya</option>
                                                                                                                <option
                                    value="111">Kiribati</option>
                                                                                                                <option
                                    value="113">Korea, Republic of</option>
                                                                                                                <option
                                    value="114">Kuwait</option>
                                                                                                                <option
                                    value="115">Kyrgyzstan</option>
                                                                                                                <option
                                    value="116">Lao People's Democratic Republic</option>
                                                                                                                <option
                                    value="117">Latvia</option>
                                                                                                                <option
                                    value="118">Lebanon</option>
                                                                                                                <option
                                    value="119">Lesotho</option>
                                                                                                                <option
                                    value="120">Liberia</option>
                                                                                                                <option
                                    value="121">Libyan Arab Jamahiriya</option>
                                                                                                                <option
                                    value="122">Liechtenstein</option>
                                                                                                                <option
                                    value="123">Lithuania</option>
                                                                                                                <option
                                    value="124">Luxembourg</option>
                                                                                                                <option
                                    value="125">Macau</option>
                                                                                                                <option
                                    value="127">Madagascar</option>
                                                                                                                <option
                                    value="128">Malawi</option>
                                                                                                                <option
                                    value="129">Malaysia</option>
                                                                                                                <option
                                    value="130">Maldives</option>
                                                                                                                <option
                                    value="131">Mali</option>
                                                                                                                <option
                                    value="132">Malta</option>
                                                                                                                <option
                                    value="133">Marshall Islands</option>
                                                                                                                <option
                                    value="134">Martinique</option>
                                                                                                                <option
                                    value="135">Mauritania</option>
                                                                                                                <option
                                    value="136">Mauritius</option>
                                                                                                                <option
                                    value="137">Mayotte</option>
                                                                                                                <option
                                    value="138">Mexico</option>
                                                                                                                <option
                                    value="139">Micronesia, Federated States of</option>
                                                                                                                <option
                                    value="140">Moldova, Republic of</option>
                                                                                                                <option
                                    value="141">Monaco</option>
                                                                                                                <option
                                    value="142">Mongolia</option>
                                                                                                                <option
                                    value="242">Montenegro</option>
                                                                                                                <option
                                    value="143">Montserrat</option>
                                                                                                                <option
                                    value="144">Morocco</option>
                                                                                                                <option
                                    value="145">Mozambique</option>
                                                                                                                <option
                                    value="146">Myanmar</option>
                                                                                                                <option
                                    value="147">Namibia</option>
                                                                                                                <option
                                    value="148">Nauru</option>
                                                                                                                <option
                                    value="149">Nepal</option>
                                                                                                                <option
                                    value="150">Netherlands</option>
                                                                                                                <option
                                    value="151">Netherlands Antilles</option>
                                                                                                                <option
                                    value="152">New Caledonia</option>
                                                                                                                <option
                                    value="153">New Zealand</option>
                                                                                                                <option
                                    value="154">Nicaragua</option>
                                                                                                                <option
                                    value="155">Niger</option>
                                                                                                                <option
                                    value="156">Nigeria</option>
                                                                                                                <option
                                    value="157">Niue</option>
                                                                                                                <option
                                    value="158">Norfolk Island</option>
                                                                                                                <option
                                    value="112">North Korea</option>
                                                                                                                <option
                                    value="159">Northern Mariana Islands</option>
                                                                                                                <option
                                    value="160">Norway</option>
                                                                                                                <option
                                    value="161">Oman</option>
                                                                                                                <option value="162"
                                        selected="selected">Pakistan</option>
                                                                                                                <option
                                    value="163">Palau</option>
                                                                                                                <option
                                    value="247">Palestinian Territory, Occupied</option>
                                                                                                                <option
                                    value="164">Panama</option>
                                                                                                                <option
                                    value="165">Papua New Guinea</option>
                                                                                                                <option
                                    value="166">Paraguay</option>
                                                                                                                <option
                                    value="167">Peru</option>
                                                                                                                <option
                                    value="168">Philippines</option>
                                                                                                                <option
                                    value="169">Pitcairn</option>
                                                                                                                <option
                                    value="170">Poland</option>
                                                                                                                <option
                                    value="171">Portugal</option>
                                                                                                                <option
                                    value="172">Puerto Rico</option>
                                                                                                                <option
                                    value="173">Qatar</option>
                                                                                                                <option
                                    value="174">Reunion</option>
                                                                                                                <option
                                    value="175">Romania</option>
                                                                                                                <option
                                    value="176">Russian Federation</option>
                                                                                                                <option
                                    value="177">Rwanda</option>
                                                                                                                <option
                                    value="178">Saint Kitts and Nevis</option>
                                                                                                                <option
                                    value="179">Saint Lucia</option>
                                                                                                                <option
                                    value="180">Saint Vincent and the Grenadines</option>
                                                                                                                <option
                                    value="181">Samoa</option>
                                                                                                                <option
                                    value="182">San Marino</option>
                                                                                                                <option
                                    value="183">Sao Tome and Principe</option>
                                                                                                                <option
                                    value="184">Saudi Arabia</option>
                                                                                                                <option
                                    value="185">Senegal</option>
                                                                                                                <option
                                    value="243">Serbia</option>
                                                                                                                <option
                                    value="186">Seychelles</option>
                                                                                                                <option
                                    value="187">Sierra Leone</option>
                                                                                                                <option
                                    value="188">Singapore</option>
                                                                                                                <option
                                    value="189">Slovak Republic</option>
                                                                                                                <option
                                    value="190">Slovenia</option>
                                                                                                                <option
                                    value="191">Solomon Islands</option>
                                                                                                                <option
                                    value="192">Somalia</option>
                                                                                                                <option
                                    value="193">South Africa</option>
                                                                                                                <option
                                    value="194">South Georgia &amp; South Sandwich Islands</option>
                                                                                                                <option
                                    value="248">South Sudan</option>
                                                                                                                <option
                                    value="195">Spain</option>
                                                                                                                <option
                                    value="196">Sri Lanka</option>
                                                                                                                <option
                                    value="249">St. Barthelemy</option>
                                                                                                                <option
                                    value="197">St. Helena</option>
                                                                                                                <option
                                    value="250">St. Martin (French part)</option>
                                                                                                                <option
                                    value="198">St. Pierre and Miquelon</option>
                                                                                                                <option
                                    value="199">Sudan</option>
                                                                                                                <option
                                    value="200">Suriname</option>
                                                                                                                <option
                                    value="201">Svalbard and Jan Mayen Islands</option>
                                                                                                                <option
                                    value="202">Swaziland</option>
                                                                                                                <option
                                    value="203">Sweden</option>
                                                                                                                <option
                                    value="204">Switzerland</option>
                                                                                                                <option
                                    value="205">Syrian Arab Republic</option>
                                                                                                                <option
                                    value="206">Taiwan</option>
                                                                                                                <option
                                    value="207">Tajikistan</option>
                                                                                                                <option
                                    value="208">Tanzania, United Republic of</option>
                                                                                                                <option
                                    value="209">Thailand</option>
                                                                                                                <option
                                    value="210">Togo</option>
                                                                                                                <option
                                    value="211">Tokelau</option>
                                                                                                                <option
                                    value="212">Tonga</option>
                                                                                                                <option
                                    value="213">Trinidad and Tobago</option>
                                                                                                                <option
                                    value="214">Tunisia</option>
                                                                                                                <option
                                    value="215">Turkey</option>
                                                                                                                <option
                                    value="216">Turkmenistan</option>
                                                                                                                <option
                                    value="217">Turks and Caicos Islands</option>
                                                                                                                <option
                                    value="218">Tuvalu</option>
                                                                                                                <option
                                    value="219">Uganda</option>
                                                                                                                <option
                                    value="220">Ukraine</option>
                                                                                                                <option
                                    value="221">United Arab Emirates</option>
                                                                                                                <option
                                    value="222">United Kingdom</option>
                                                                                                                <option
                                    value="223">United States</option>
                                                                                                                <option
                                    value="224">United States Minor Outlying Islands</option>
                                                                                                                <option
                                    value="225">Uruguay</option>
                                                                                                                <option
                                    value="226">Uzbekistan</option>
                                                                                                                <option
                                    value="227">Vanuatu</option>
                                                                                                                <option
                                    value="228">Vatican City State (Holy See)</option>
                                                                                                                <option
                                    value="229">Venezuela</option>
                                                                                                                <option
                                    value="230">Viet Nam</option>
                                                                                                                <option
                                    value="231">Virgin Islands (British)</option>
                                                                                                                <option
                                    value="232">Virgin Islands (U.S.)</option>
                                                                                                                <option
                                    value="233">Wallis and Futuna Islands</option>
                                                                                                                <option
                                    value="234">Western Sahara</option>
                                                                                                                <option
                                    value="235">Yemen</option>
                                                                                                                <option
                                    value="238">Zambia</option>
                                                                                                                <option
                                    value="239">Zimbabwe</option>
                                                                        </select>
                    </div>
            </div>
            <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-shipping-zone">Region / State:</label>
                <div class="col-sm-10">

                <select name="shipping_zone_id" id="input-shipping-zone" class="form-control">
                    </select>
                    </div>
            </div>
                    </div>
    </form>
    <script>
        // $('form.form-shipping input[name="shipping_address"]').change(function () {
        //     if (this.value == 'new') {
        //         $('#shipping-existing').hide();
        //         $('#shipping-new').show().find('input[type="text"]').val('');
        //     } else {
        //         $('#shipping-existing').show();
        //         $('#shipping-new').hide();
        //     }
        //     $(document).trigger('journal_checkout_address_changed', 'shipping');
        // });

        // $('form.form-shipping select[name=\'shipping_country_id\']').on('change', function(e, first) {
        //     if (!this.value) return;
        //     $.ajax({
        //         url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
        //         dataType: 'json',
        //         beforeSend: function() {
        //             $('form.form-shipping select[name=\'shipping_country_id\']').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');
        //         },
        //         complete: function() {
        //             $('.fa-spin').remove();
        //         },
        //         success: function(json) {
        //             $('.fa-spin').remove();

        //             if (json['postcode_required'] == '1') {
        //                 $('form.form-shipping input[name=\'shipping_postcode\']').parent().addClass('required');
        //             } else {
        //                 $('form.form-shipping input[name=\'shipping_postcode\']').parent().removeClass('required');
        //             }

        //             html = '<option value=""> --- Please Select --- </option>';

        //             if (json['zone'] != '') {
        //                 for (i = 0; i < json['zone'].length; i++) {
        //                     html += '<option value="' + json['zone'][i]['zone_id'] + '"';

        //                     if (json['zone'][i]['zone_id'] == '0') {
        //                         html += ' selected="selected"';
        //                     }

        //                     html += '>' + json['zone'][i]['name'] + '</option>';
        //                 }
        //             } else {
        //                 html += '<option value="0" selected="selected"> --- None --- </option>';
        //             }

        //             $('form.form-shipping select[name=\'shipping_zone_id\']').html(html);

        //             if (!first) {
        //                 $(document).trigger('journal_checkout_address_changed', 'shipping');
        //             }
        //         },
        //         error: function(xhr, ajaxOptions, thrownError) {
        //             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        //         }
        //     });
        // }).trigger('change', true);

        // $('form.form-shipping select[name=\'shipping_zone_id\']').on('change', function() {
        //     $(document).trigger('journal_checkout_address_changed', 'shipping');
        // });

        // $('form.form-shipping select[name=\'shipping_address_id\']').on('change', function() {
        //     $(document).trigger('journal_checkout_address_changed', 'shipping');
        // });

        // var timeout_shipping = null;

        // $('form.form-shipping input[name=\'shipping_postcode\']').on('keydown', function() {
        //     if (timeout_shipping) {
        //         clearTimeout(timeout_shipping);
        //     }
        //     timeout_shipping = setTimeout(function () {
        //         $(document).trigger('journal_checkout_address_changed', 'shipping');
        //     }, 500);
        // });
    </script>
    </div>    </fieldset>
            <script>
         $('input[name=\'customer_group_id\']:checked').live('change', function() {
             var customer_group = [];

                         customer_group[1] = [];
             customer_group[1]['company_id_display'] = '1';
             customer_group[1]['company_id_required'] = '0';
             customer_group[1]['tax_id_display'] = '0';
             customer_group[1]['tax_id_required'] = '1';
            
             if (customer_group[this.value]) {
                 if (customer_group[this.value]['company_id_display'] == '1') {
                     $('.company_id-input').show();
                 } else {
                     $('.company_id-input').hide();
                 }

                 if (customer_group[this.value]['company_id_required'] == '1') {
                     $('.company_id-input').addClass('required');
                 } else {
                     $('.company_id-input').removeClass('required');
                 }

                 if (customer_group[this.value]['tax_id_display'] == '1') {
                     $('.tax_id-input').show();
                 } else {
                     $('.tax_id-input').hide();
                 }

                 if (customer_group[this.value]['tax_id_required'] == '1') {
                     $('.tax_id-input').addClass('required');
                 } else {
                     $('.tax_id-input').removeClass('required');
                 }
             }
         });

         $('input[name=\'customer_group_id\']:checked').trigger('change');
    </script>
    </div>                                    </div>
                <div class="right">
                    <section class="section-left">
                                                <div class="spw">
                                                        <div class="checkout-content checkout-shipping-methods">
    <h2 class="secondary-title">Shipping Method</h2>
            <p><strong>Free Shipping</strong></p>
                                    <div class="radio">
                    <label>
                                                                                <input type="radio" name="shipping_method" value="free.free"
                                   checked="checked"/>
                                                Free Shipping -  0.00</label>
                </div>
                        </div>
                                                        <div class="checkout-content checkout-payment-methods">
    <h2 class="secondary-title">Payment Method</h2>
            <div class="radio">
            <label>
                                                        <input type="radio" name="payment_method" value="free_checkout"
                           checked="checked"/>
                                Free Checkout                            </label>
        </div>
    </div>                        </div>
                    </section>
                    <section class="section-right">
                        <div class="checkout-content coupon-voucher">
    <h2 class="secondary-title">Do you Have a Coupon or Voucher?</h2>
            </div>
                        <div class="checkout-content checkout-cart">
    <h2 class="secondary-title">Shopping Cart</h2>
    <div class="table-responsive checkout-product">
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <td class="text-left name" colspan="2">Product Name</td>
                <!--<td class="text-left model">Model</td>-->
                <td class="text-left quantity">Quantity</td>
                <td class="text-right price">Price</td>
                <td class="text-right total">Total</td>
            </tr>
            </thead>
            <tbody>
                            <tr>
                    <td class="text-center image">                            <a href="https://www.innotek.com.pk/index.php?route=product/product&amp;product_id=2"><img src="https://www.innotek.com.pk/image/cache/01.0010.20-47x47.jpg" alt="01.0010.20" title="01.0010.20" class="img-thumbnail" /></a>
                        </td>
                    <td class="text-left name"><a
                            href="https://www.innotek.com.pk/index.php?route=product/product&amp;product_id=2">01.0010.20</a>
                                                </td>
                    <!--<td class="text-left model">01.0010.20</td>-->
                    <td class="quantity"><input type="text" name="quantity[2::]" value="1" size="1" />
                        <span class="input-group">
                            <input type="image" class="btn-update" src="catalog/view/theme/default/image/update.png" data-product-key="2::" alt="Update" title="Update" />
                            <input type="image" class="btn-delete" src="catalog/view/theme/default/image/remove.png" data-product-key="2::" alt="Remove" title="Remove" />
                        </span>
                    </td>
                    <td class="price"> 0.00</td>
                    <td class="total"> 0.00</td>
                </tr>
                                    </tbody>
            <tfoot>
                            <tr>
                    <td colspan="4" class="text-right">Sub-Total:</td>
                    <td class="text-right"> 0.00</td>
                </tr>
                            <tr>
                    <td colspan="4" class="text-right">Total:</td>
                    <td class="text-right"> 0.00</td>
                </tr>
                        </tfoot>
        </table>
    </div>
    <div id="payment-confirm-button" class="payment-free_checkout">
        <h2 class="secondary-title">Payment Details</h2>
        <div class="buttons">
  <div class="right">
    <input type="button" value="Confirm Order" id="button-confirm" class="button" />
  </div>
</div>
<script type="text/javascript">
$('#button-confirm').bind('click', function() {
  $.ajax({ 
    type: 'get',
    url: 'index.php?route=payment/free_checkout/confirm',
    success: function() {
      location = 'https://www.innotek.com.pk/index.php?route=checkout/success';
    }   
  });
});
</script> 
    </div>
</div>

                        <div class="checkout-content confirm-section">
                            <div>
                                <h2 class="secondary-title">Add Comments About Your Order</h2>
                                <label>
                                    <textarea name="comment" rows="8" class="form-control"></textarea>
                                </label>
                            </div>
                                                        <div class="checkbox check-newsletter">
                                <label for="newsletter">
                                    <input type="checkbox" name="newsletter" value="1" id="newsletter" />
                                    I wish to subscribe to the Innotek Instruments newsletter.               
                                                     </label>
                            </div>
                            
                            
                                                        <div class="radio check-terms">
                                <label>
                                    <input type="checkbox" name="agree" value="1" />
                                    I have read and agree to the <a class="colorbox" href="<?=base_url()?>about" alt="About Us"><b>About Us</b></a>                                </label>
                            </div>
                                                        <div class="confirm-order">
                                <button id="journal-checkout-confirm-button" data-loading-text="Loading.." class="button confirm-button">Place your Order</button>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
                    </div>
    </div>
</div>
<script>
  
</script>
<script type="text/javascript"><!--
$('.colorbox').colorbox({
    width: 640,
    height: 480
});
//--></script>
</div>
</div>