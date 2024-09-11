<FORM NAME='pass_check_form' ACTION='https://adpanchok.co.kr/ez/bbs.php' METHOD=POST onsubmit="return PassInputCheck();"
    style='display:inline;' target='_self'>
    <INPUT TYPE=HIDDEN NAME='table' VALUE=''>
    <INPUT TYPE=HIDDEN NAME='action' VALUE=''>
    <INPUT TYPE=HIDDEN NAME='uid' VALUE=''>
    <INPUT TYPE=HIDDEN NAME='ruid' VALUE=''>
    <INPUT TYPE=HIDDEN NAME='p' VALUE=''>
    <INPUT TYPE=HIDDEN NAME='Nparam' VALUE=''>

    <TABLE CELLSPACING='0' CELLPADDING='0' ID='PassCheckLayer' STYLE='display:none;position:absolute;left:0;top:0;'>
        <TR>
            <TD><IMG SRC='bbs/image/top_pw.gif'></TD>
        </TR>

        <div style="visibility: hidden;"><SPAN ID='PwLayTitle'></SPAN></div>
        <TR>
            <TD height=18 background='bbs/image/bg_pw.gif'>&nbsp;&nbsp;&nbsp;<IMG SRC='bbs/image/dot_pw.gif'
                    align=absmiddle>
                <FONT COLOR='#415D5D'>yyyyyy</FONT>
            </TD>
        </TR>
        <TR>
            <TD background='bbs/image/input_pw.gif' height=40>
                &nbsp;&nbsp;&nbsp;<INPUT TYPE=PASSWORD NAME='COMP_PASS' STYLE='border:1 solid #C0C0C0;width:100px;'>
                <INPUT TYPE=IMAGE SRC='bbs/image/btn_pw_submit.gif' BORDER=0 align=absmiddle>
                <IMG SRC='bbs/image/btn_pw_cancel.gif' BORDER=0 align=absmiddle onclick="PassInputClose();"
                    STYLE='cursor:pointer;'>
            </TD>
        </TR>
        <TR>
            <TD><IMG SRC='bbs/image/bottom_pw.gif'></TD>
        </TR>
    </TABLE>

</FORM>
<FORM NAME='DataForm' style='display:inline;'>
    <INPUT TYPE=HIDDEN NAME=table VALUE="">
    <INPUT TYPE=HIDDEN NAME=query VALUE="">
    <INPUT TYPE=HIDDEN NAME=p VALUE="">
    <INPUT TYPE=HIDDEN NAME=uid VALUE="">
    <INPUT TYPE=HIDDEN NAME=where VALUE="">
    <INPUT TYPE=HIDDEN NAME=keyword VALUE="">
    <INPUT TYPE=HIDDEN NAME=search_type VALUE="">
    <INPUT TYPE=HIDDEN NAME=search_step VALUE="">
    <INPUT TYPE=HIDDEN NAME=category VALUE="">
    <INPUT TYPE=HIDDEN NAME=sort VALUE="">
    <INPUT TYPE=HIDDEN NAME=orderby VALUE="">
    <INPUT TYPE=HIDDEN NAME=write_type VALUE="">
    <INPUT TYPE=HIDDEN NAME=grecnum VALUE="">
</FORM>

<INPUT TYPE=HIDDEN ID='CookieSecret' VALUE="">
<INPUT TYPE=HIDDEN ID='isRoot' VALUE="0">
<INPUT TYPE=HIDDEN ID='isAdmin' VALUE="0">
<INPUT TYPE=HIDDEN ID='mbid' VALUE="">
<INPUT TYPE=HIDDEN ID='LastPage' VALUE="">



<DIV ID='UserIdLayer' STYLE='display:none;position:absolute;left:0;top:0;'></DIV>
<DIV ID='tmp_Upfile_Show_Layer'></DIV>
</td>
<td width=40></td>
</tr>
</table>

</td>
</tr>
</table>
<!-- 1240 end -->




{{-- <div class="search_area">
    <div class="search_adjust">
        <div class="search_bar">
            <form name="zsearch" action="">
                <input type="hidden" id="zonfocus" name="zonfocus" value="">
                <input type="hidden" id="zgo_cate" name="zgo_cate" value="">
                <input type="hidden" name="where" value="all">
                <input type="checkbox" onclick="this.checked ? a.disable() : a.enable();" style="display:none;">
                <div class="si_input"><input type="text" name="keyword" id="main_keyword" onfocus="zcontent_chk()"
                        onblur="zcontent_out()" value="Search"></div>
                <div class="si_submit"><img src="{{ asset('frontend/image/fh_find.png') }}"
                        onclick="$('[name=zsearch]').submit()" class="fh_hover"></div>
            </form>
        </div>
    </div>
</div> --}}


<div class="main_bottom" style="background:url({{ asset('frontend/image/footer_bg13860.png?v=1') }}) repeat-x;">
    <div style="width:1240px;margin:0 auto;padding-left:34px;">
        <div style="box-sizing:border-box;width:1090px;margin:0 auto;padding-right:40px;position:relative;">
            <div><img src="{{ asset('frontend/image/footer_information7b30.png?v=4') }}" usemap="#footer1">
            </div>
            <div style="position:absolute;left:619px;top:239px;width:169px;height:20px;"><select
                    onchange="down_file(this.value)" style="width:100%;height:20px;border:solid 1px #ababab;">
                    <option value=""></option>
                    <option value="%ec%82%ac%ec%97%85%ec%9e%90%eb%93%b1%eb%a1%9d%ec%a6%9d.jpg">Test</option>
                    <option value="%ec%97%ac%ec%84%b1%ea%b8%b0%ec%97%85%ed%99%95%ec%9d%b8%ec%84%9c.jpg">
                        test
                    </option>
                    <option value="%25B1%25B9%25B9%25CE%c0%ba%25C7%25E0_%25C5%25EB%25C0%25E5%25BB%e7%ba%bb.html">
                        Text</option>
                    <option value="%eb%86%8d%ed%98%91_%ed%86%b5%ec%9e%a5%ec%82%ac%eb%b3%b8.jpg">text
                    </option>
                    <option value="%25C7%cf%b3%25AA%c0%ba%25C7%25E0_%25C5%25EB%25C0%25E5%25BB%e7%ba%bb.html">
                        text</option>
                    <option value="4%eb%8c%80%eb%b3%b4%ed%97%98%ec%99%84%eb%82%a9%ec%a6%9d%eb%aa%85.pdf">
                        text
                    </option>
                    <option value="%ea%b5%ad%ec%84%b8%ec%99%84%eb%82%a9%ec%a6%9d%eb%aa%85%ec%84%9c.pdf">
                        text</option>
                    <option
                        value="%25C1%df%bc%d2%b1%25E2%25BE%25F7%c8%ae%25C0%ce%bc%25AD(%25B0%25F8%25B0%25F8%25B1%25E2%25B0%25FC%25C0%25D4%25C2%25FB%25BF%25EB).jpg">
                        text</option>
                    <option
                        value="%ec%a4%91%ec%86%8c%ea%b8%b0%ec%97%85%ed%99%95%ec%9d%b8%ec%84%9c(%ea%b3%b5%ea%b3%b5%ea%b8%b0%ea%b4%80%ec%9e%85%ec%b0%b0_%ec%9d%b4%ec%99%b8%ec%9a%a9%eb%8f%84).jpg">
                        text</option>
                </select></div>
        </div>
    </div>
</div>
<map name="footer1">
    <area shape="rect" coords="11,182,98,258" href="regis.html" onfocus="blur()"><!-- ȸ������ -->
    <area shape="rect" coords="113,182,199,258" href="mypagee90f.html?query=info" onfocus="blur()"><!-- �������� -->
    <area shape="rect" coords="223,182,309,258" href="bbs2bcb.html?table=faq" onfocus="blur()"><!-- FAQ -->
    <area shape="rect" coords="322,182,408,258" href="incbd7f.html?inc=company/guide"
        onfocus="blur()"><!-- ���ΰ��̵� -->
    <area shape="rect" coords="426,182,511,258" href="inccab6.html?inc=company/work"
        onfocus="blur()"><!-- �۾����ǻ��� -->
    <area shape="rect" coords="569,55,787,126" href="javascript:void(0)" onclick="popup_webhard()"
        onfocus="blur()"><!-- ���ϵ忡 ���Ͽø��� -->
    <area shape="rect" coords="569,127,787,199" href="javascript:void(0)"
        onclick="alert('�̸����ּ�(kor@koreagift.com)�� ����Ǿ����ϴ�.\n\nCtrl+V �Ͻø� �ٿ��ֱⰡ �����մϴ�.');"
        data-clipboard-text="kor@koreagift.com" class="btn_clip" onfocus="blur()"><!-- �̸��Ϸ� ���Ͽø��� -->
    <area shape="rect" coords="836,99,1051,127" href="javascript:void(0)"
        onclick="alert('�������� ���¹�ȣ�� ����Ǿ����ϴ�.\n\nCtrl+V �Ͻø� �ٿ��ֱⰡ �����մϴ�.');"
        data-clipboard-text="27853704001459" class="btn_clip" onfocus="blur()"><!-- �������� -->
    <area shape="rect" coords="836,70,1051,98" href="javascript:void(0)"
        onclick="alert('�������� ���¹�ȣ�� ����Ǿ����ϴ�.\n\nCtrl+V �Ͻø� �ٿ��ֱⰡ �����մϴ�.');"
        data-clipboard-text="3550036634943" class="btn_clip" onfocus="blur()"><!-- �������� -->
    <area shape="rect" coords="836,128,1051,156" href="javascript:void(0)"
        onclick="alert('�ϳ����� ���¹�ȣ�� ����Ǿ����ϴ�.\n\nCtrl+V �Ͻø� �ٿ��ֱⰡ �����մϴ�.');"
        data-clipboard-text="58191003571004" class="btn_clip" onfocus="blur()"><!-- �ϳ����� -->
    <area shape="rect" coords="836,196,942,226" href="javascript:void(0)"
        onclick="window.open('smartro_pay/ez_pay.html', 'payCard', 'width=500,height=580,top=100,left=100')"
        onfocus="blur()"><!-- ī����� -->
    <area shape="rect" coords="945,196,1051,226" href="http://www.smartro.co.kr/" target="_blank"
        onfocus="blur()"><!-- ī�念���� ��� -->
    <area shape="rect" coords="836,229,942,259" href="javascript:void(0)" onclick="zorderform2()"
        onfocus="blur()"><!-- ���ּ� ��� -->
    <area shape="rect" coords="945,229,1051,259" href="https://www.hometax.go.kr/" target="_blank"
        onfocus="blur()"><!-- ���ݿ����� ��� -->
</map>


<div
    style="background:url({{ asset('frontend/image/footer_bg25e1f.png?v=2') }}) repeat-x left top;margin-bottom:30px;">
    <div style="width:1240px;margin:0 auto;padding-left:34px;">
        <div style="box-sizing:border-box;width:1090px;margin:0 auto;padding-right:40px;">
            <div><img src="{{ asset('frontend/image/footer_menu5e1f.png?v=2') }}" usemap="#footer2"></div>
            <div><img src="{{ asset('frontend/image/footer_address3860.png?v=1') }}" usemap="#footer3"></div>
        </div>
    </div>
</div>
<a name="zbottom"></a>
<map name="footer2">
    <area shape="rect" coords="0,91,45,127" href="https://adpanchok.co.kr/about_pc/" target="_blank"
        onfocus="blur()"><!-- ȸ��Ұ� -->
    <area shape="rect" coords="158,91,203,127" href="inc4e67.html?inc=company/zstipulation"
        onfocus="blur()"><!-- �̿��� -->
    <area shape="rect" coords="316,91,405,127" href="incfdea.html?inc=company/private"
        onfocus="blur()"><!-- ����������޹�ħ -->
    <area shape="rect" coords="518,91,563,127" href="bbs2bcb.html?table=faq" onfocus="blur()"><!-- �������� -->
    <area shape="rect" coords="676,91,723,127" href="https://adpanchok.co.kr/about_pc/map.php" target="_blank"
        onfocus="blur()"><!-- ���ô� �� -->
    <area shape="rect" coords="836,23,1051,82"
        href="https://mall.sgic.co.kr/csh/iutf/sh/shop/CSHINFO004VM0.mvc?tm=3" target="_blank"
        onfocus="blur()"><!-- ���񽺰��Ի��Ȯ�� -->
    <area shape="rect" coords="836,90,943,127" href="https://adpanchok.co.kr/partner" target="_blank"
        onfocus="blur()"><!-- �������� -->
    <area shape="rect" coords="943,90,1051,127" href="https://adpanchok.co.kr/partner/login.php" target="_blank"
        onfocus="blur()"><!-- ���»� �α��� -->
</map>
<map name="footer3">
    <area shape="rect" coords="572,43,657,59"
        href="https://www.ftc.go.kr/info/bizinfo/communicationViewPopup.jsp?wrkr_no=2108160114" target="_blank"
        onfocus="blur()"><!-- ���������Ȯ�� -->
    <area shape="rect" coords="716,20,780,77" href="javascript:void(0)"
        onclick="nsWindow('blue','������ ���ұ��','450','655','mark_1');nsWindowReset();"
        onfocus="blur()"><!-- ������ ���ұ�� -->
    <area shape="rect" coords="792,20,873,77" href="javascript:void(0)"
        onclick="nsWindow('blue','���̼��� �귣����','450','655','mark_2');nsWindowReset();"
        onfocus="blur()"><!-- ���̼��� �귣���� -->
    <area shape="rect" coords="883,20,979,77" href="javascript:void(0)"
        onclick="nsWindow('blue','�濵������ �߼ұ������','450','655','mark_3');nsWindowReset();"
        onfocus="blur()"><!-- �濵������ �߼ұ������ -->
    <area shape="rect" coords="987,20,1049,77" href="javascript:void(0)"
        onclick="window.open('https://www.ftc.go.kr/info/bizinfo/communicationViewPopup.jsp?wrkr_no=2108160114','','width=700,height=640,top=100,left=200,scrollbars=yes');"
        onfocus="blur()"><!-- �����ŷ�����ȸ -->
</map>

<div id="my_popup1" style="z-index:1010;position:fixed;top:50%;left:50%;width:340px;display:none;font-size:12px;">
    <div
        style="background-color:#99b4d1;padding:5px;border:solid 1px #000;border-radius:5px 5px 0 0;box-shadow:2px 2px 5px #333;">
        <div style="float:left;height:22px;line-height:22px;font-size:13px;font-weight:bold;">���ϵ� �̿� �ȳ�</div>
        <div style="float:right;"><button type="button" style="padding:0 5px;cursor:pointer;"
                onclick="$('#my_popup1').hide()">X</button></div>
        <div style="clear:both;margin-bottom:2px;"></div>
        <div style="background-color:white;padding:15px;">
            <p style="background:url(image/icon_warning.png) left 5px no-repeat;padding-left:42px;line-height:180%;">
                ���ϵ忡 ���� ���ε� �Ͻ� �� <span style="color:red;font-weight:bold;">�����</span>,<br>
                �Ǵ� <span style="color:red;font-weight:bold;">��ȭ�Ͻ� �������� ��ȭ</span> ��Ź�帳�ϴ�.<br>
                ��ȭ��ȭ�� �� �� �� ������ �� �־� �۾���<br>
                ������ �� �ֽ��ϴ�.</p>
        </div>
        <div style="background-color:#f0f0f0;text-align:right;padding:10px;"><a href="http://www.webhard.co.kr/"
                target="_blank" onclick="$('#my_popup1').hide()"><button type="button"
                    style="padding:0 20px;">Ȯ��</button></a></div>
    </div>
</div>



<!-- guest confirm channel -->


{{-- <div class="cc_btn_open ez" style="z-index:99;"><img src="zfile/img/btn_chat_consult_ez5e1f.png?v=2"
data-hover="/ez/zfile/img/btn_chat_consult_ez_hover.png?v=2"
data-ori="zfile/img/btn_chat_consult_ez5e1f.png?v=2">
</div> --}}

<div id="confirm_consulting" class="cc_layout ez">
    <div>
        <div class="cc_head1"></div>
        <div class="cc_head2">
            <div class="cc_title_div">
                <div class="cc_image" size="30"><img width="30" height="30"
                        src="zfile/img/chat_consult_icon.png">
                </div>
                <div class="cc_title">CC</div>
            </div>
            <div class="cc_clear"></div>
        </div>
        <button class="cc_btn_close"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                xmlns="http://www.w3.org/2000/svg" class="cc_btn_close_svg" defaultOpacity="1" hoveredOpacity="1"
                margintop="0" marginright="0" marginbottom="0" marginleft="0">
                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"
                    d="M16.4818 4.69668L15.3033 3.51817L10 8.82147L4.69671 3.51817L3.5182 4.69668L8.8215 9.99998L3.51819 15.3033L4.6967 16.4818L10 11.1785L15.3033 16.4818L16.4818 15.3033L11.1785 9.99998L16.4818 4.69668Z">
                </path>
            </svg></button>
    </div>

    <div class="cc_out_box">
        <div class="cc_in_box">
            <form method="post" action="https://adpanchok.co.kr/ez/lib/login.php"
                onsubmit="return check_cc_login(this)" target="ifrm_login">
                <input type="hidden" name="mode" value="cc_login">
                <input type="hidden" name="device" value="ez">
                <div style="float:left;">
                    <div class="cc_sub_title ez">&nbsp;CC</div>
                </div>
                <div class="" style="float:right;text-align:right;margin-top:5px;"><a
                        href="inc9f77.html?inc=other/zSEARCH_MYINFO"
                        style="font-size:0.7rem;color:#8d8d8d;font-weight:normal;">[ID/PW ã��]</a></div>
                <div class="cc_clear"></div>
                <div class="">
                    <div>
                        <input type="text" name="MB_ID" placeholder="���̵�" class="cc_in_id cc_input"
                            tabindex="10"><button type="submit" class="btn btn_cc_login" tabindex="12">
                            <div>�α���</div>
                        </button>
                        <input type="password" name="MB_PW" placeholder="��й�ȣ" class="cc_in_pw cc_input"
                            tabindex="11">
                    </div>
            </form>
            <div class="cc_clear"></div>
            <div style="padding-top:10px;text-align:center;">

                <a href="javascript:void(0)" class="top_font1"><img src="img/simple_login_kakao.png"></a>
                <a href="regis.html" class="btn btn_cc_join">CC</a>

            </div>
            <div class="cc_guide">CC</div>
        </div>
        <iframe name="ifrm_login" frameborder="0" style="display:none;"></iframe>
    </div>
</div>

<div class="cc_out_box">
    <div class="cc_in_box">

        <div class="cc_sub_title ez">&nbsp; cc</div>


        <div class="">
            <div class="cc_row">
                <div class="cc_item">Item</div>
                <div class="cc_value cc_div_personal_parent"><input type="text" id="cc_name" tabindex="20"
                        class="cc_input">
                    <div class="cc_div_personal"><label class="cc_radio_personal"><input type="radio"
                                name="is_personal" value="1">Item</label> <label
                            class="cc_radio_personal"><input type="radio" name="is_personal" value="0"
                                checked>���</label></div>
                </div>
                <div class="cc_clear"></div>
            </div>
            <div class="cc_row">
                <div class="cc_item">Item</div>
                <div class="cc_value"><input type="text" id="cc_company" tabindex="21" class="cc_input">
                </div>
                <div class="cc_clear"></div>
            </div>
            <div class="cc_row">
                <div class="cc_item">Item</div>
                <div class="cc_value"><input type="tel" name="AUTH_TEL1" id="AUTH_TEL1" size="4"
                        maxlength="3" class="cc_in_tel1 cc_input" tabindex="-1" value="010" readonly><span
                        class="cc_d"></span><input type="tel" name="AUTH_TEL2" id="AUTH_TEL2" size="5"
                        maxlength="4" class="cc_in_tel2 cc_input" tabindex="23"><span class="cc_d"></span><input
                        type="tel" name="AUTH_TEL3" id="AUTH_TEL3" size="5" maxlength="4"
                        class="cc_in_tel3 cc_input" tabindex="24"></div>
                <div class="cc_clear"></div>
            </div>

            <div class="cc_chk_div">
                <input type="checkbox" id="cc_chk" class="cc_chk" tabindex="25"> <span
                    class="btn_cc_agree">Agree</span>
            </div>

            <div>
                <button type="button" class="btn btn_cc_start" tabindex="26">Start</button>
            </div>
        </div>


    </div>
</div>

</div>

<div id="wp_tg_cts" style="display:none;"></div>



<div class="kga_layer">
    <div class="kga_box">
        <div class="kga_header">
            <div id="kga_title">Title</div>
            <div class="kga_btn_x">&times;</div>
        </div>
        <div class="kga_body"><span id="kga_content"></span></div>
        <div class="kga_footer"><button type="button" class="kga_btn_close">Ȯ��</button></div>
    </div>
</div>


<iframe src="keep.html" frameborder="0" style="display:none;"></iframe>


<div id="layer_popup_ur" style="top:579px;">
    {{-- <div class="ac"><a href="inc53b1.html?inc=company/zgoimg"><img
src="../ndesign/nimg/main/design/popup3860.png?v=1" usemap="#popup_design"></a></div> --}}
    <map name="popup_design">
        <area shape="rect" coords="0,0,152,171" href="inc53b1.html?inc=company/zgoimg"><!-- ������ ���ø� -->
        <area shape="rect" coords="12,171,102,193" href="javascript:void(0)" onclick="layer_popup_ur_close(1)">
        <area shape="rect" coords="103,171,140,193" href="javascript:void(0)" onclick="layer_popup_ur_close(0)">
    </map>
</div>



</div>
<script language="javascript" src="{{ asset('frontend/js/defaultc66d.js?ver=12') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/lightbox.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery-1.11.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.autocomplete-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/ns-window.js') }}"></script>
<script type="text/javascript" async src="{{ asset('frontend/js/wp_astg_4.0.js') }}"></script>
<script src="{{ asset('frontend/js/clipboard.min.js') }}"></script>
<script src="{{ asset('frontend/js/slick.js') }}" charset="utf-8"></script>
<script src="{{ asset('frontend/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" async src="{{ asset('frontend/js/wp_astg_4.0.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/wcslog.js') }}"></script>
<script type="text/javascript" charset="UTF-8" src="{{ asset('frontend/js/kp.js') }}"></script>
<script src="{{ asset('frontend/js/rolling8119.js?v=2024012601') }}"></script>
<script src="{{ asset('frontend/js/jquery.scrollbox.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.lazyload4b17.js?v=1.9.1') }}"></script>
<script src="{{ asset('frontend/js/custom.js') }}"></script>
<script src="{{ asset('/js/storage.js') }}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>
    var cartItems = pullObjectFromStorage('cartItems')
    $("#top-cart-count").html(cartItems.length)
</script>
@yield('script')


{{-- <iframe name='logiframe' src='lib/sys_checkeb3e.html?referer=&amp;zreferer_ori=' width=0 height=0 frameborder=0
    scrolling=0></iframe> --}}
