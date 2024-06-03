@extends('layouts.frontend')
@section('content')
<div class="single-checkout">
    <div class="container">
        <div class="wrapper">
            <div class="checkout flexwrap">
                <div class="item left styled">
                    <h1>Please Login</h1>
                    <div style="margin-bottom: 2em; text-align: center;">
                        @if(Session::has('success'))
                        <p style="color: red" class="text-center">{{ Session::get('success')}}</p>
                        @endif
                        @if(Session::has('error'))
                        <p style="color: red" class="text-center">{{ Session::get('error')}}</p>
                        @endif
                    </div>
                    <form method="POST" action="{{ route('user.register.submit')}}">
                        @csrf
                        <p>
                            <label for="name">Your Name <span></span></label>
                            <input type="text" name="name" id="name" value="{{ Auth::user()->name }}">
                            @if($errors->has('name'))
                            <small style="color: red">{{ $errors->first('name')}}</small>
                            @endif
                        </p>
                        <p>
                            <label for="email">Email Address <span></span></label>
                            <input type="text" name="email" id="email" autocomplete="off" value="{{ Auth::user()->email }}">
                            @if($errors->has('email'))
                            <small style="color: red">{{ $errors->first('email')}}</small>
                            @endif
                        </p>
                        <div class="register-item">
                            <p class="lefts">
                                <label for="country_code">Country Code <span></span></label>
                                <select type="text" name="country_code" id="country_code">
                                    <option value="" selected disabled>{{ Auth::user()->country_code }}</option>
                                    <option value="+93">+93 (Afghanistan)</option>
                                    <option value="+355">+355 (Albania)</option>
                                    <option value="+213">+213 (Algeria)</option>
                                    <option value="+376">+376 (Andorra)</option>
                                    <option value="+244">+244 (Angola)</option>
                                    <option value="+1264">+1264 (Anguilla)</option>
                                    <option value="+1268">+1268 (Antigua & Barbuda)</option>
                                    <option value="+54">+54 (Argentina)</option>
                                    <option value="+374">+374 (Armenia)</option>
                                    <option value="+297">+297 (Aruba)</option>
                                    <option value="+61">+61 (Australia)</option>
                                    <option value="+43">+43 (Austria)</option>
                                    <option value="+994">+994 (Azerbaijan)</option>
                                    <option value="+1242">+1242 (Bahamas)</option>
                                    <option value="+973">+973 (Bahrain)</option>
                                    <option value="+880">+880 (Bangladesh)</option>
                                    <option value="+1246">+1246 (Barbados)</option>
                                    <option value="+375">+375 (Belarus)</option>
                                    <option value="+32">+32 (Belgium)</option>
                                    <option value="+501">+501 (Belize)</option>
                                    <option value="+229">+229 (Benin)</option>
                                    <option value="+1441">+1441 (Bermuda)</option>
                                    <option value="+975">+975 (Bhutan)</option>
                                    <option value="+591">+591 (Bolivia)</option>
                                    <option value="+387">+387 (Bosnia & Herzegovina)</option>
                                    <option value="+267">+267 (Botswana)</option>
                                    <option value="+55">+55 (Brazil)</option>
                                    <option value="+673">+673 (Brunei)</option>
                                    <option value="+359">+359 (Bulgaria)</option>
                                    <option value="+226">+226 (Burkina Faso)</option>
                                    <option value="+257">+257 (Burundi)</option>
                                    <option value="+855">+855 (Cambodia)</option>
                                    <option value="+237">+237 (Cameroon)</option>
                                    <option value="+1">+1 (Canada)</option>
                                    <option value="+238">+238 (Cape Verde)</option>
                                    <option value="+1345">+1345 (Cayman Islands)</option>
                                    <option value="+236">+236 (Central African Republic)</option>
                                    <option value="+235">+235 (Chad)</option>
                                    <option value="+56">+56 (Chile)</option>
                                    <option value="+86">+86 (China)</option>
                                    <option value="+57">+57 (Colombia)</option>
                                    <option value="+269">+269 (Comoros)</option>
                                    <option value="+242">+242 (Congo - Brazzaville)</option>
                                    <option value="+243">+243 (Congo - Kinshasa)</option>
                                    <option value="+682">+682 (Cook Islands)</option>
                                    <option value="+506">+506 (Costa Rica)</option>
                                    <option value="+385">+385 (Croatia)</option>
                                    <option value="+53">+53 (Cuba)</option>
                                    <option value="+599">+599 (Curacao)</option>
                                    <option value="+357">+357 (Cyprus)</option>
                                    <option value="+420">+420 (Czech Republic)</option>
                                    <option value="+45">+45 (Denmark)</option>
                                    <option value="+253">+253 (Djibouti)</option>
                                    <option value="+1767">+1767 (Dominica)</option>
                                    <option value="+1809">+1809 (Dominican Republic)</option>
                                    <option value="+593">+593 (Ecuador)</option>
                                    <option value="+20">+20 (Egypt)</option>
                                    <option value="+503">+503 (El Salvador)</option>
                                    <option value="+240">+240 (Equatorial Guinea)</option>
                                    <option value="+291">+291 (Eritrea)</option>
                                    <option value="+372">+372 (Estonia)</option>
                                    <option value="+251">+251 (Ethiopia)</option>
                                    <option value="+500">+500 (Falkland Islands)</option>
                                    <option value="+298">+298 (Faroe Islands)</option>
                                    <option value="+679">+679 (Fiji)</option>
                                    <option value="+358">+358 (Finland)</option>
                                    <option value="+33">+33 (France)</option>
                                    <option value="+689">+689 (French Polynesia)</option>
                                    <option value="+241">+241 (Gabon)</option>
                                    <option value="+220">+220 (Gambia)</option>
                                    <option value="+995">+995 (Georgia)</option>
                                    <option value="+49">+49 (Germany)</option>
                                    <option value="+233">+233 (Ghana)</option>
                                    <option value="+350">+350 (Gibraltar)</option>
                                    <option value="+30">+30 (Greece)</option>
                                    <option value="+299">+299 (Greenland)</option>
                                    <option value="+1473">+1473 (Grenada)</option>
                                    <option value="+590">+590 (Guadeloupe)</option>
                                    <option value="+1671">+1671 (Guam)</option>
                                    <option value="+502">+502 (Guatemala)</option>
                                    <option value="+224">+224 (Guinea)</option>
                                    <option value="+245">+245 (Guinea-Bissau)</option>
                                    <option value="+592">+592 (Guyana)</option>
                                    <option value="+509">+509 (Haiti)</option>
                                    <option value="+504">+504 (Honduras)</option>
                                    <option value="+852">+852 (Hong Kong)</option>
                                    <option value="+36">+36 (Hungary)</option>
                                    <option value="+354">+354 (Iceland)</option>
                                    <option value="+91">+91 (India)</option>
                                    <option value="+62">+62 (Indonesia)</option>
                                    <option value="+98">+98 (Iran)</option>
                                    <option value="+964">+964 (Iraq)</option>
                                    <option value="+353">+353 (Ireland)</option>
                                    <option value="+972">+972 (Israel)</option>
                                    <option value="+39">+39 (Italy)</option>
                                    <option value="+1876">+1876 (Jamaica)</option>
                                    <option value="+81">+81 (Japan)</option>
                                    <option value="+962">+962 (Jordan)</option>
                                    <option value="+7">+7 (Kazakhstan)</option>
                                    <option value="+254">+254 (Kenya)</option>
                                    <option value="+686">+686 (Kiribati)</option>
                                    <option value="+850">+850 (Korea, North)</option>
                                    <option value="+82">+82 (Korea, South)</option>
                                    <option value="+965">+965 (Kuwait)</option>
                                    <option value="+996">+996 (Kyrgyzstan)</option>
                                    <option value="+856">+856 (Laos)</option>
                                    <option value="+371">+371 (Latvia)</option>
                                    <option value="+961">+961 (Lebanon)</option>
                                    <option value="+266">+266 (Lesotho)</option>
                                    <option value="+231">+231 (Liberia)</option>
                                </select>
                                @if($errors->has('country_code'))
                                <small style="color: red">{{ $errors->first('country_code')}}</small>
                                @endif
                            </p>
                            <p class="rights">
                                <label for="phone_number">Phone Number <span></span></label>
                                <input type="text" name="phone_number" id="phone_number" value="{{ Auth::user()->phone_number }}">
                                @if($errors->has('phone_number'))
                                <small style="color: red">{{ $errors->first('phone_number')}}</small>
                                @endif
                            </p>
                        </div>
                        <p>
                            <label for="shipping_address">Shipping Address <span></span></label>
                            <input type="text" name="shipping_address" id="shipping_address" value="{{ Auth::user()->shipping_address }}">
                            @if($errors->has('shipping_address'))
                            <small style="color: red">{{ $errors->first('shipping_address')}}</small>
                            @endif
                        </p>
                        <p>
                            <label for="billing_address">Billing Address <span></span></label>
                            <input type="text" name="billing_address" id="billing_address" value="{{ Auth::user()->shipping_address }}">
                            @if($errors->has('billing_address'))
                            <small style="color: red">{{ $errors->first('billing_address')}}</small>
                            @endif
                        </p>
                        <p>
                            <label for="password">Password <span></span></label>
                            <input type="password" name="password" id="password" value="{{ Auth::user()->password }}">
                            @if($errors->has('password'))
                            <small style="color: red">{{ $errors->first('password')}}</small>
                            @endif
                        </p>
                        <div class="flexitem space-between">
                            <a href="">View Order</a>
                            <a href="{{ route('user.login')}}" style="color: red;">Logout</a>
                        </div>
                        <div class="primary-checkout">
                            <button class="primary-button primary-checkout">Update</button>
                        </div>
                    </form>
                </div>

                <div class="item right">
                    <h2>User Info Update!</h2>
                    <div class="summary-order is-sticky">
                        <div class="summary-totals">
                            <h3>Please Fil form which will be changes!</h3>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection