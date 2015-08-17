<!--
Responsive Email Template by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->

<div id="mailsub" class="notification" align="center">

<table width="100%" border="0" cellspacing="0" cellpadding="0" style="min-width: 320px;"><tr><td align="center" bgcolor="#eff3f8">


<!--[if gte mso 10]>
<table width="680" border="0" cellspacing="0" cellpadding="0">
<tr><td>
<![endif]-->

<table border="0" cellspacing="0" cellpadding="0" class="table_width_100" width="100%" style="max-width: 680px; min-width: 300px;">
    <tr><td>
    <!-- padding --><div style="height: 80px; line-height: 80px; font-size: 10px;"> </div>
    </td></tr>
    <!--header -->
    <tr><td align="center" bgcolor="#ffffff">
        <!-- padding --><div style="height: 30px; line-height: 30px; font-size: 10px;"> </div>
        <table width="90%" border="0" cellspacing="0" cellpadding="0">
            <tr><td align="left"><!--

                Item --><div class="mob_center_bl" style="float: left; display: inline-block; width: 115px;">
                    <table class="mob_center" width="300" border="0" cellspacing="0" cellpadding="0" align="left" style="border-collapse: collapse;">
                        <tr><td align="left" valign="middle">
                            <!-- padding --><div style="height: 20px; line-height: 20px; font-size: 10px;"> </div>
                            <table width="300" border="0" cellspacing="0" cellpadding="0" >
                                <tr><td align="left" valign="top" class="mob_center">
                                    <a href="{{ url() }}" target="_blank" style="color: #596167; font-family: Arial, Helvetica, sans-serif; font-size: 13px;">
                                    <font face="Arial, Helvetica, sans-seri; font-size: 13px;" size="3" color="#596167">
                                        @lang('app.layout.title')
                                    </font></a>
                                </td></tr>
                            </table>
                        </td></tr>
                    </table></div><!-- Item END--><!--[if gte mso 10]>
                    </td>
                <![endif]--></td>
            </tr>
        </table>
        <!-- padding --><div style="height: 50px; line-height: 50px; font-size: 10px;"> </div>
    </td></tr>
    <!--header END-->

    <!--content 1 -->
    <tr><td align="center" bgcolor="#fbfcfd">
        <table width="90%" border="0" cellspacing="0" cellpadding="0">
            <tr><td align="center">
                <!-- padding --><div style="height: 60px; line-height: 60px; font-size: 10px;"> </div>
                <div style="line-height: 44px;">
                    <font face="Arial, Helvetica, sans-serif" size="5" color="#57697e" style="font-size: 34px;">
                    <span style="font-family: Arial, Helvetica, sans-serif; font-size: 34px; color: #57697e;">
                        @yield('subject')
                    </span></font>
                </div>
                <!-- padding --><div style="height: 40px; line-height: 40px; font-size: 10px;"> </div>
            </td></tr>
            <tr><td align="center">
                <div style="line-height: 24px;">
                    <font face="Arial, Helvetica, sans-serif" size="4" color="#57697e" style="font-size: 15px;">
                    <span style="font-family: Arial, Helvetica, sans-serif; font-size: 15px; color: #57697e;">
                        @yield('content')
                    </span></font>
                </div>
                <!-- padding --><div style="height: 40px; line-height: 40px; font-size: 10px;"> </div>
            </td></tr>
            <tr><td align="center">
                <div style="line-height: 24px;">
                    <a href="@yield('linkUrl')" target="_blank" style="color: #596167; font-family: Arial, Helvetica, sans-serif; font-size: 13px;">
                        <font face="Arial, Helvetica, sans-seri; font-size: 13px;" size="3" color="#596167">
                        @yield('linkText')
                    </a>
                </div>
                <!-- padding --><div style="height: 60px; line-height: 60px; font-size: 10px;"> </div>
            </td></tr>
        </table>
    </td></tr>
    <!--content 1 END-->

    <tr><td>
    <!-- padding --><div style="height: 80px; line-height: 80px; font-size: 10px;"> </div>
    </td></tr>
</table>
<!--[if gte mso 10]>
</td></tr>
</table>
<![endif]-->

</td></tr>
</table>

</div>
