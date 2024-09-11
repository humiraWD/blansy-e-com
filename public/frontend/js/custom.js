function addfavorites() {
  var u_url = 'https://adpanchok.co.kr/';
  var title_ = 'hello';
  var ua = window.navigator.userAgent;
  if (ua.indexOf('MSIE') > 0 || ua.indexOf('Trident') > 0) {
    window.external.AddFavorite(u_url, title_);
  } else if (ua.indexOf('Opera') > 0 || ua.indexOf('OPR') > 0) {
    var elem = document.createElement('a');
    elem.setAttribute('href', u_url);
    elem.setAttribute('title', title_);
    elem.setAttribute('rel', 'sidebar');
    elem.click();
  } else if (ua.indexOf('Firefix') > 0) window.sidebar.addPanel(title_, u_url, '');
  else if (ua.indexOf('Safari') > 0) {
    if (ua.indexOf('Chrome') > 0) alert('Ctrl+DŰ�� �����ø� ���ã�⿡ �߰��Ͻ� �� �ֽ��ϴ�.');
    else b = 'Safari';
  }
}
(function (c, l, a, r, i, t, y) {
  c[a] =
    c[a] ||
    function () {
      (c[a].q = c[a].q || []).push(arguments);
    };
  t = l.createElement(r);
  t.async = 1;
  t.src = 'https://www.clarity.ms/tag/' + i;
  y = l.getElementsByTagName(r)[0];
  y.parentNode.insertBefore(t, y);
})(window, document, 'clarity', 'script', 'lht01zfn3h');

var a; // a2
var is_cat = false;
jQuery(function () {
  var options = {
    serviceUrl: './lib/search.php',
    minChars: 2, // �ּ� ��ܾ���� �˻�����
    width: 282,
    delimiter: /(,|;)\s*/,
    deferRequestBy: 0, // miliseconds
    params: {
      country: 'Yes'
    },
    noCache: false, // set to true, to disable caching
    onSelect: function (ntitle, ncate) {
      if (typeof ncate !== 'undefined' && new RegExp(/^\d{9}$/).test(ncate)) {
        location.href = 'mall52f5.html?cat=' + ncate;
      } else {
        // if(ncate) { document.getElementById("zgo_cate").value = ncate; }
        zsearch.submit();
      }
    },
    onClick: function (ntitle, ncate) {
      if (typeof ncate !== 'undefined' && new RegExp(/^\d{9}$/).test(ncate)) {
        location.href = 'mall52f5.html?cat=' + ncate;
      } else {
        // if(ncate) { document.getElementById("zgo_cate").value = ncate; }
        zsearch.submit();
      }
    }
  };
  a = $('#main_keyword').autocomplete(options);
  // a2 = $('#months').autocomplete({
  // 	width: 384,
  // 	delimiter: /(,|;)\s*/,
  // 	lookup: 'January,February,March,April,May,June,July,August,September,October,November,December'.split(',')
  // });
});
//]]>

$(function () {
  jQuery(window).scroll(function () {
    var position = jQuery(window).scrollTop();
    if (position >= 200) {
      jQuery('#A_menu').addClass('fixed');
      document.getElementById('A_menu').style.display = 'block';
    } else {
      jQuery('#A_menu').removeClass('fixed');
      document.getElementById('A_menu').style.display = 'none';
    }
  });
});

function nsWindow(theme, za, zb, zc, zd) {
  $.nsWindow.open({
    title: za,
    width: zb,
    height: zc,
    dataUrl: './addon/ns-window/popup.php?popfile=' + zd,
    theme: theme
  });
}

function closeWindow() {
  $.nsWindow.close();
  ({});
}

function zcontent_chk() {
  const regex = new RegExp('^���˹��� �����϶� !');
  if (regex.test($('#main_keyword').val())) {
    $('#main_keyword').val(
      $('#main_keyword')
        .val()
        .replace(/^���˹��� �����϶� !/, '')
    );
  }
  // document.getElementById("main_keyword").value = "";
  document.getElementById('zonfocus').value = 'Y';
}

function zcontent_out() {
  // $("#main_keyword").blur(callback), $("#main_keyword").on("blur", callback)
  if ($.trim($('#main_keyword').val()) === '') $('#main_keyword').val('���˹��� �����϶� !');
}

// js for popular swiper in header
var swiper_popular = new Swiper('#popular', {
  navigation: {
    nextEl: '.head_popular_next',
    prevEl: '.head_popular_prev'
  },
  mousewheel: false,
  grabCursor: true,
  slidesPerView: 'auto',
  loop: true,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false
  },
  on: {
    beforeTransitionStart: function () {
      $('#popular_effect').show();
    },
    slideChangeTransitionEnd: function () {
      $('#popular_effect').hide();
    }
  }
});
$('.head_popular').hover(
  function () {
    swiper_popular.autoplay.stop();
  },
  function () {
    swiper_popular.autoplay.start();
  }
);
$('#popular').hover(
  function () {
    swiper_popular.autoplay.stop();
  },
  function () {
    swiper_popular.autoplay.start();
  }
);

// js for slider down navbar

var main_slide = $('#main_slide');
main_slide.owlCarousel({
  items: 3,
  slideBy: 2,
  lazyLoad: true,
  autoplay: true,
  autoplayTimeout: 4000,
  autoplayHoverPause: true,
  autoWidth: false,
  loop: true,
  nav: true,
  dots: true,
  margin: 15
});
// 2023-12-11(��) - ���콺 ���� �� �̵�
$(document).on('mouseenter', '#main_slide .owl-dot', function (e) {
  $(this).click();
});

// navbar js
var use_polygon = 1;
$('.d2row>li')
  .mouseenter(function () {
    var sub = $(this).find('.d3row');
    if (use_polygon) $(this).addClass('active');
    sub.show();
    var current_offset = $(this).offset();
    var current_width = $(this).width();
    var sub_offset = sub.offset();
    var sub_height = sub.height();
    var offset_top = current_offset.top - 15;
    if (offset_top + sub.height() >= $(document).scrollTop() + window.innerHeight)
      offset_top = current_offset.top - sub_height + 5;
    sub.offset({
      left: current_offset.left + $(this).width(),
      top: offset_top
    });
  })
  .mouseleave(function () {
    var sub = $(this).find('.d3row');
    if (use_polygon) $(this).removeClass('active');
    sub.hide();
  });
$('.d3row').mouseenter(function () {
  $(this).parent().removeClass('active');
});

$(document).on('keydown', '#k', function (e) {
  if (e.keyCode === 13 || e.key === 'Enter') {
    e.preventDefault();
    $('#formCS').submit();
  }
});
$(document).on('click', '.custom_search .content .chk_cs', function (e) {
  // 2023-11-07(ȭ) - ����/��� �ߺ� ���� ����
  // 2023-11-15(��) - ���ݵ� �ߺ� ���� ����
  if ($('.custom_search').find('[name="' + $(this).attr('name') + '"]:checked').length > 1) {
    $('.custom_search')
      .find('[name="' + $(this).attr('name') + '"]:checked')
      .prop('checked', false);
    $(this).prop('checked', true);
  }
  // 2024-02-07(��) - ���� ���� �Է� ����
  if ($(this).attr('name') === 'csc[]') {
    var prices = $(this).val().split('_');
    $('.custom_search').find('input[name=cp1]').val(prices[0]);
    $('.custom_search').find('input[name=cp2]').val(prices[1]);
  }
  // update_cs();
});

function update_cs() {
  $('.custom_search')
    .find('.content')
    .each(function (e) {
      let html = '';
      $(this)
        .find('.chk_cs:checked')
        .each(function (e) {
          html +=
            '<div class="item"><span>' +
            $(this).closest('label').text() +
            '</span><span class="cs_del">&times;</span></div>';
        });
      $(this).closest('.content').prev().find('.selected').html(html);
    });
}
$(document).on('click', '.custom_search .cs_del', function (e) {
  let curr_str = $(this).prev().text();
  $('.chk_cs:checked').each(function (e) {
    if ($(this).closest('label').text() === curr_str) {
      $(this).closest('label').find('input').click();
    }
  });
});

function check_custom_search(f) {
  let csk = $.trim($('#csk').val());
  /*
  if ( !csk.length ) {
    alert("�˻�� �Է����ּ���.");
    $("#csk").focus();
    return false;
  }
  */
  var cp1 = parseInt($('.custom_search .cp1').val(), 10) || 0;
  var cp2 = parseInt($('.custom_search .cp2').val(), 10) || 0;
  if ($('.chk_cs:checked').length || cp1 || cp2) {
  } else {
    alert('�˻� ������ �������ּ���.');
    return false;
  }
  return true;
}

function custom_search_show() {
  is_cs_clicked = 1;
  $('.cs_close').show();
  if ($('#div_category_all').is(':visible')) toggle_category_all();
  $('.custom_search_bg').show();
  $('.custom_search').fadeIn('fast');
}

function custom_search_hide() {
  is_cs_clicked = 0;
  $('.custom_search_bg').hide();
  $('.custom_search').fadeOut('fast');
}

$(document).on('click', '#csk', function (e) {
  if (!$('.custom_search').is(':visible')) {
    custom_search_show();
  }
});
$(document).on('click', '.ck_submit', function (e) {
  if ($('.custom_search').is(':visible')) {
    $('#formCS').submit();
  } else {
    custom_search_show();
  }
});
var is_cs_clicked = 0;
var is_cs_closed = 0;
$(document).on('click', '.cs_close', function (e) {
  is_cs_closed = 1;
  custom_search_hide();
});
$(document).on('click', '.cs_submit', function (e) {
  e.preventDefault();
  $('#formCS').submit();
});
$(document).on('click', '.custom_search_bg', function (e) {
  custom_search_hide();
});
$(document).on('click', 'div.select', function (e) {
  if (is_cs_closed) {
    is_cs_closed = 0;
  } else {
    custom_search_show();
  }
});
$('div.select').on({
  mouseenter: function (e) {
    if (!is_cs_clicked) {
      $('.cs_close').hide();
      $('.custom_search').fadeIn('fast');
    }
  },
  mouseleave: function (e) {
    if (!is_cs_clicked) {
      $('.cs_close').show();
      $('.custom_search').hide();
    }
  }
});

function toggle_category_all() {
  if ($('.custom_search').is(':visible')) $('.custom_search').fadeOut('fast');
  if ($('#div_category_all').is(':visible')) {
    $('#div_category_all').hide();
    $('#fixed_blank').hide();
    $('.total_category .icon').attr('src', 'img/icon_plus5e1f.png?v=2');
  } else {
    $('#div_category_all').show();
    if ($('#div_category_all').hasClass('fh_all')) $('#fixed_blank').show();
    $('#fixed_blank').show();
    $('.total_category .icon').attr('src', 'img/icon_minus5e1f.png?v=2');
  }
}
$(document).on('mouseleave', '#div_category_all', function (e) {
  // $("#div_category_all").hide();
  // $(".total_category .icon").attr("src", "/ez/img/icon_plus.png");
});
$(document).on('mouseenter', '.tc_tabs tr td', function (e) {
  var no = $(this).data('tab');
  $('.tc_tab').removeClass('active');
  $('.tc_tab_' + no).addClass('active');
  $('.tc_tab_open').hide();
  $('.tc_tab_open_' + no).show();
});
$(document).on('click', '.btn_close_all_category', function (e) {
  $('#div_category_all').hide();
  $('#fixed_blank').hide();
  $('.total_category .icon').attr('src', 'img/icon_plus.png');
});

$(function () {
  $('.top_gnb .menu')
    .mouseenter(function () {
      // $("#div_category_all").hide();
      // $(".total_category .icon").attr("src", "/ez/img/icon_plus.png");
      $('.btn_close_all_category').click();
      var t = $(this).find('img');
      t.attr('src', t.attr('src').replace(/_off/, '_on'));
    })
    .mouseleave(function () {
      var t = $(this).find('img');
      t.attr('src', t.attr('src').replace(/_on/, '_off'));
    });
});

var best_num = 3;
var best_speed = 4000;
var best_idx = 0,
  interval_best;

function KY_S(idx) {
  best_idx = idx;
  for (i = 0; i < best_num; i++) eval('Kb_S' + i + ".style.display='none';");
  eval('Kb_S' + idx + ".style.display='block';");
}
function best_change() {
  best_idx++;
  if (best_idx == best_num) best_idx = 0;
  KY_S(best_idx);
}

function setInterval_best() {
  interval_best = setInterval('best_change()', best_speed);
}
function clearInterval_best() {
  clearInterval(interval_best);
}
// setInterval_best();

// sticky header js
var to_cont = new Array();
var gcount = 0;
var zfirst = 0;
var zlast = 2;

function today_sam(idx) {
  gcount = 0;
  var tdTable = '';

  for (i = idx; i < to_cont.length; i++) {
    gcount++;
    if (gcount < 4) {
      if (gcount > 0) {
        tdTable + '<tr><td align=center><table width=70 border=0 cellspacing=0 cellpadding=0 height=70><tr>';
        tdTable = tdTable + " <td align='center' valign='middle' id=today_sam" + i + " style=display:''>";
        tdTable = tdTable + to_cont[i];
        tdTable = tdTable + '</td></tr></table></td></tr>';
      }
    }
  }

  if (!tdTable) {
    tdTable = "<tr><td><img src='{{ asset('frontend/image/tosam_no.gif') }}' width='84'></td></tr>";
  }

  document.all.to_sam.innerHTML = tdTable;
}

function ClickView(status) {
  var gtCnt = to_cont.length;

  if (gtCnt > 0) {
    if (gtCnt > 3) {
      if (status == 'prev') {
        if (zfirst > 0) {
          zfirst = zfirst - 1;
          zlast = zlast - 1;
          today_sam(zfirst);
        }
      } else {
        if (gtCnt > zlast + 1) {
          zfirst = zfirst + 1;
          zlast = zlast + 1;
          today_sam(zfirst);
        }
      }
    }
  }
}
today_sam(0);

function getCutString(str, num, ss) {
  return str.substring(0, num) + ss;
}

function getTypeCheck(s, spc) {
  var i;

  for (i = 0; i < s.length; i++) {
    if (spc.indexOf(s.substring(i, i + 1)) < 0) {
      return false;
    }
  }
  return true;
}

function commaSplit(srcNumber) {
  var txtNumber = '' + srcNumber;

  var rxSplit = new RegExp('([0-9])([0-9][0-9][0-9][,.])');
  var arrNumber = txtNumber.split('.');
  arrNumber[0] += '.';
  do {
    arrNumber[0] = arrNumber[0].replace(rxSplit, '$1,$2');
  } while (rxSplit.test(arrNumber[0]));
  if (arrNumber.length > 1) {
    return arrNumber.join('');
  } else {
    return arrNumber[0].split('.')[0];
  }
}

function filterNum(str) {
  re = /^\$|,/g;
  return str.replace(re, '');
}

function getDateFormat(date, type) {
  var ck;
  var rtstr = '';
  var j = 0;
  for (var i = 0; i < type.length; i++) {
    if (type.substring(i, i + 1) == 'x') {
      rtstr += date.substring(j, j + 1);
    } else {
      j--;
      rtstr += type.substring(i, i + 1);
    }
    j++;
  }
  document.write(rtstr);
}

function CheckWords(words) {
  if (words.length < 1) return '';

  var BadWordSet = frames.WordFilterFrame.document.body.innerHTML;
  var BadWordArr = BadWordSet.split(',');
  var BadWordNum = BadWordArr.length;

  for (var i = 0; i < BadWordNum; i++) {
    if (words.indexOf(BadWordArr[i]) != -1) return BadWordArr[i];
  }
  return '';
}

function getPageLink1(lnum, p, tpage, imgpath) {
  var g_p1 = "<IMG src='" + imgpath + "/prev1.gif' border='0' ALIGN=ABSMIDDLE>";
  var g_p2 = "<IMG src='" + imgpath + "/prev2.gif' border='0' ALIGN=ABSMIDDLE>";
  var g_n1 = "<IMG src='" + imgpath + "/next1.gif' border='0' ALIGN=ABSMIDDLE>";
  var g_n2 = "<IMG src='" + imgpath + "/next2.gif' border='0' ALIGN=ABSMIDDLE>";
  var g_cn = "<IMG src='" + imgpath + "/cutln.gif' border='0' ALIGN=ABSMIDDLE>";
  var g_q = '';

  if (p < lnum + 1) {
    g_q += g_p1;
  } else {
    var pp = parseInt((p - 1) / lnum) * lnum;
    g_q += "<A HREF='javascript:getPageGo1(" + pp + ");'>" + g_p2 + '</A>';
  }
  g_q += g_cn;

  var st1 = parseInt((p - 1) / lnum) * lnum + 1;
  var st2 = st1 + lnum;

  for (var jn = st1; jn < st2; jn++)
    if (jn <= tpage)
      jn == p
        ? (g_q += '<FONT COLOR=RED>' + jn + '</FONT>' + g_cn)
        : (g_q += "<A HREF='javascript:getPageGo1(" + jn + ");'>" + jn + '</A>' + g_cn);

  if (tpage < lnum || tpage < jn) {
    g_q += g_n1;
  } else {
    var np = jn;
    g_q += "<A HREF='javascript:getPageGo1(" + np + ");'>" + g_n2 + '</A>';
  }

  document.write(g_q);
}

function getPageLink2(lnum, p, tpage, imgpath) {
  var g_p1 = '<span class="p1">��</span>';
  var g_p2 = '<span class="p2">��</span>';
  var g_n1 = '<span class="n1">��</span>';
  var g_n2 = '<span class="n2">��</span>';
  var g_q = '';
  if (p < lnum + 1) {
    g_q += g_p1;
  } else {
    var pp = parseInt((p - 1) / lnum) * lnum;
    g_q += '<a href="javascript:getPageGo1(\'' + pp + '\');">' + g_p2 + '</a>';
  }
  var st1 = parseInt((p - 1) / lnum) * lnum + 1;
  var st2 = st1 + lnum;
  for (var jn = st1; jn < st2; jn++) {
    if (jn <= tpage) {
      if (jn == p) {
        g_q += '<a href="javascript:void(0)"><span class="p c">' + jn + '</span></a>';
      } else {
        g_q += '<a href="javascript:getPageGo1(\'' + jn + '\');"><span class="p">' + jn + '</span></a>';
      }
    }
  }
  if (tpage < lnum || tpage < jn) {
    g_q += g_n1;
  } else {
    var np = jn;
    g_q += '<a href="javascript:getPageGo1(\'' + np + '\');">' + g_n2 + '</a>';
  }
  document.write(g_q);
}

function getPageGo1(n) {
  var p = getUriString1('p');
  var que = location.href.replace('&p=' + p, '');
  que = que.indexOf('?') != -1 ? que : que + '?';

  location.href = que + '&p=' + n;
}

function getUriString1(param) {
  var QuerySplit = location.href.split('?');
  var ResultQuer = QuerySplit[1] ? QuerySplit[1].split('&') : '';

  for (var i = 0; i < ResultQuer.length; i++) {
    var keyval = ResultQuer[i].split('=');
    if (param == keyval[0]) return keyval[1];
  }
  return '';
}

function outCheck() {
  if (!confirm('������ Ż���Ͻðڽ��ϱ�?\n\n[Ȯ��]�� Ŭ���ϸ� ��Ȯ�� ���� Ż��ó���˴ϴ�.       ')) {
    return false;
  }
}

function showGoodsPic(uid) {
  window.open(
    'lib/module/picview/viewc891.html?uid=' + uid,
    'picwin',
    'left=0,top=0,width=720,height=555,scrollbars=no'
  );
}

function showGroupPic(uid) {
  window.open(
    'lib/module/picview/gviewc891.html?uid=' + uid,
    'picwin',
    'left=0,top=0,width=720,height=555,scrollbars=no'
  );
}

function showAuctionPic(uid) {
  window.open(
    'lib/module/picview/aviewc891.html?uid=' + uid,
    'picwin',
    'left=0,top=0,width=720,height=555,scrollbars=no'
  );
}

function wishCheck(id) {
  if (id == '') {
    alert('ȸ������ �α����� �ּ���.            ');
    return false;
  }
  if (!confirm('���ɻ�ǰ ��Ͽ� �����ðڽ��ϱ�?         ')) {
    return false;
  }
}

function showSearchWin(skin) {
  window.open(
    './template/search/' + skin + '/search.php',
    'searchwin',
    'left=0,top=0,width=457,height=360,scrollbars=no'
  );
}

function GoodsExplorer() {
  window.open(
    'lib/module/explorer/explorer.html',
    'explorer',
    'left=0,top=0,width=800,height=680,status=yes,scrollbars=no'
  );
}

function getBlink(str, lay) {
  var c = document.getElementById(lay);
  if (c.innerHTML == '') c.innerHTML = str;
  if (c.style.visibility == 'visible') {
    c.style.visibility = 'hidden';
  } else {
    c.style.visibility = 'visible';
  }

  setTimeout("getBlink('" + str + "','" + lay + "');", 500);
}

var klayer_flag = 0;
var KimsUserName;
var KimsUserUrl;
var KimsUserId;
var KimsMyId;

function getRootLayer(table, e) {
  var imgpath = './image/idl';

  var T = '';
  var L = document.getElementById('UserIdLayer');
  var x = e.pageX ? e.pageX : document.body.scrollLeft + event.clientX;
  var y = e.pageY ? e.pageY : document.body.scrollTop + event.clientY;

  klayer_flag = 1;
  KimsUserName = '������';
  KimsUserId = 'root';

  T += "<TABLE ID='UserIdTable' BGCOLOR='#C0C0C0' WIDTH=120 CELLSPACING=1 CELLPADDING=0><TR><TD>";
  T += "<TABLE BGCOLOR='#EFEFEF' WIDTH=100% CELLSPACING=0 CELLPADDING=3 STYLE='cursor:default;'>";
  T +=
    "<TR onclick=getRootQue('mail'); onmouseover='getIdTrOver(this)' onmouseout='getIdTrOut(this)'><TD><IMG SRC='" +
    imgpath +
    "/3.gif' ALIGN=absmiddle> ���� ������</TD></TR>";
  T +=
    "<TR onclick=getRootQue('msg'); onmouseover='getIdTrOver(this)' onmouseout='getIdTrOut(this)'><TD><IMG SRC='" +
    imgpath +
    "/2.gif' ALIGN=absmiddle> ���� ������</TD></TR>";
  if (table)
    T +=
      "<TR onclick=getRootQue('search'); onmouseover='getIdTrOver(this)' onmouseout='getIdTrOut(this)'><TD><IMG SRC='" +
      imgpath +
      "/8.gif' ALIGN=absmiddle> ��ϱ� �˻�</TD></TR>";
  T += '</TABLE></TD></TR></TABLE>';
  T +=
    "<INPUT ID='UserTableFocusField' onBlur='getUserIdLayerBlur();' STYLE='left:-100,top:0;width:0;height:0;border:0;'>";

  L.innerHTML = T;

  L.style.top = y;
  L.style.left = x + 10;
  L.style.display = 'block';
  document.getElementById('UserTableFocusField').focus();
}

// Writer
function getUserIdLayer(user_name, user_id, home_url, friend_type, table, myid, e) {
  var imgpath = './image/idl';

  var T = '';
  var L = document.getElementById('UserIdLayer');
  var x = e.pageX ? e.pageX : document.body.scrollLeft + event.clientX;
  var y = e.pageY ? e.pageY : document.body.scrollTop + event.clientY;

  klayer_flag = 1;
  KimsUserName = user_name;
  KimsUserUrl = home_url;
  KimsUserId = user_id;
  KimsMyId = myid;

  T += "<iframe name='kimsidlayerframe' width=0 height=0 frameborder=0 scrolling=0></iframe>";
  T += "<TABLE ID='UserIdTable' BGCOLOR='#C0C0C0' WIDTH=120 CELLSPACING=1 CELLPADDING=0><TR><TD>";
  T += "<TABLE BGCOLOR='#EFEFEF' WIDTH=100% CELLSPACING=0 CELLPADDING=3 STYLE='cursor:default;'>";

  T +=
    "<TR onclick=getIdQueToMember('info'); onmouseover='getIdTrOver(this)' onmouseout='getIdTrOut(this)'><TD><IMG SRC='" +
    imgpath +
    "/1.gif' ALIGN=absmiddle> ����� ����</TD></TR>";
  T +=
    "<TR onclick=getIdQueToMember('mail'); onmouseover='getIdTrOver(this)' onmouseout='getIdTrOut(this)'><TD><IMG SRC='" +
    imgpath +
    "/3.gif' ALIGN=absmiddle> ���� ������</TD></TR>";
  T +=
    "<TR onclick=getIdQueToMember('msg'); onmouseover='getIdTrOver(this)' onmouseout='getIdTrOut(this)'><TD><IMG SRC='" +
    imgpath +
    "/2.gif' ALIGN=absmiddle> ���� ������</TD></TR>";
  if (home_url != '')
    T +=
      "<TR onclick=getIdQueToMember('home'); onmouseover='getIdTrOver(this)' onmouseout='getIdTrOut(this)'><TD><IMG SRC='" +
      imgpath +
      "/4.gif' ALIGN=absmiddle> Ȩ������ �湮</TD></TR>";
  if (friend_type != 'me') {
    if (friend_type == '')
      T +=
        "<TR onclick=getIdQueToMember('friend_Y'); onmouseover='getIdTrOver(this)' onmouseout='getIdTrOut(this)'><TD><IMG SRC='" +
        imgpath +
        "/7.gif' ALIGN=absmiddle> ģ���� ���</TD></TR>";
    if (friend_type == 'friend')
      T +=
        "<TR onclick=getIdQueToMember('friend_N'); onmouseover='getIdTrOver(this)' onmouseout='getIdTrOut(this)'><TD><IMG SRC='" +
        imgpath +
        "/7.gif' ALIGN=absmiddle> ģ������ ����</TD></TR>";
    if (friend_type == '')
      T +=
        "<TR onclick=getIdQueToMember('black_Y'); onmouseover='getIdTrOver(this)' onmouseout='getIdTrOut(this)'><TD><IMG SRC='" +
        imgpath +
        "/6.gif' ALIGN=absmiddle> ������ ���</TD></TR>";
    if (friend_type == 'black')
      T +=
        "<TR onclick=getIdQueToMember('black_N'); onmouseover='getIdTrOver(this)' onmouseout='getIdTrOut(this)'><TD><IMG SRC='" +
        imgpath +
        "/6.gif' ALIGN=absmiddle> ���Ѹǿ��� ����</TD></TR>";
  }
  if (table)
    T +=
      "<TR onclick=getIdQueToMember('search'); onmouseover='getIdTrOver(this)' onmouseout='getIdTrOut(this)'><TD><IMG SRC='" +
      imgpath +
      "/8.gif' ALIGN=absmiddle> ��ϱ� �˻�</TD></TR>";

  T += '</TABLE></TD></TR></TABLE>';
  T +=
    "<INPUT ID='UserTableFocusField' onBlur='getUserIdLayerBlur();' STYLE='left:-100,top:0;width:0;height:0;border:0;'>";

  L.innerHTML = T;

  L.style.top = y;
  L.style.left = x + 10;
  L.style.display = 'block';
  document.getElementById('UserTableFocusField').focus();
}

function getRootQue(que) {
  switch (que) {
    case 'mail':
      getUserPaperWin('', 'mail');
      break;

    case 'msg':
      getUserPaperWin('', 'send');
      break;

    case 'search':
      break;
  }
}

function getIdQueToMember(que) {
  switch (que) {
    case 'info':
      getUserInfoWin(KimsUserId, 'main');
      break;
    case 'mail':
      getUserPaperWin(KimsUserId, 'mail');
      break;
    case 'msg':
      getUserPaperWin(KimsUserId, 'send');
      break;
    case 'home':
      if (KimsUserUrl != '') window.open(KimsUserUrl);
      else alert('Ȩ�������� ��ϵǾ� ���� �ʽ��ϴ�.      ');
      break;
    case 'friend_Y':
      if (!confirm('������ ģ���� ����Ͻðڽ��ϱ�?      ')) {
        return false;
      }
      getUserAction(KimsUserId, 'friend_in', 'friend');
      break;
    case 'black_Y':
      if (!confirm('������ ��������Ʈ�� ����Ͻðڽ��ϱ�?      ')) {
        return false;
      }
      getUserAction(KimsUserId, 'friend_in', 'black');
      break;
    case 'friend_N':
      if (!confirm('������ ģ������ �����Ͻðڽ��ϱ�?      ')) {
        return false;
      }
      getUserAction(KimsUserId, 'friend_out', 'friend');
      break;
    case 'black_N':
      if (!confirm('������ ��������Ʈ���� �����Ͻðڽ��ϱ�?      ')) {
        return false;
      }
      getUserAction(KimsUserId, 'friend_out', 'black');
      break;
    case 'search':
      if (KimsUserId != '') {
        document.DataForm.where.value = 'BB_MB_ID';
        document.DataForm.keyword.value = KimsUserId;
      } else {
        document.DataForm.where.value = 'BB_NAME';
        document.DataForm.keyword.value = KimsUserName;
      }
      location.href = getThisUrl();
      break;
  }
}

function getIdTrOver(obj) {
  obj.style.background = '#225588';
  obj.style.color = '#EFEFEF';
}

function getIdTrOut(obj) {
  obj.style.background = '#EFEFEF';
  obj.style.color = '#000000';
}

//BlurAct
function getUserIdLayerBlur() {
  klayer_flag = 0;
  setTimeout("getUserIdLayerBlurQ(document.getElementById('UserIdTable'))", 150);
}
//BlurQue
function getUserIdLayerBlurQ(obj) {
  if (klayer_flag) return false;
  document.getElementById('UserIdLayer').innerHTML = '';

  klayer_flag = 0;
  KimsUserName = '';
  KimsUserUrl = '';
  KimsUserId = '';
  KimsMyId = '';

  obj.style.left = 0;
  obj.style.top = 0;
  obj.style.display = 'none';
}

function getUserInfoWin(hisid, query) {
  window.open(
    'lib/module/member/member0f15.html?query=' + query + '&id=' + hisid,
    'userwin',
    'left=0,top=0,width=480,height=455'
  );
}

function getUserPaperWin(hisid, query) {
  window.open(
    'lib/module/paper/paper0f15.html?query=' + query + '&id=' + hisid,
    'msgwin',
    'left=0,top=0,width=435,height=310'
  );
}

function getUserAction(hisid, action, type) {
  frames.kimsidlayerframe.location.href =
    'lib/module/member/membere83f.html?action=' + action + '&id=' + hisid + '&type=' + type + '&stop=1';
  setTimeout('location.reload();', 100);
}

function getSelectToLayer(obj, lwidth, href) {
  if (navigator.userAgent.indexOf('Opera') != -1 || navigator.userAgent.indexOf('MSIE') == -1) {
    return false;
  }

  obj.style.display = 'none';
  var newsb = obj.id + '_sbj';
  var newid = obj.id + '_tmp';
  var newim = obj.id + '_img';
  var LayerTag = '';

  LayerTag += "<TABLE WIDTH='" + lwidth + "' CELLSPACING=0 CELLPADDING=0 STYLE='position:absolute;cursor:default;'>";
  LayerTag += '<TR HEIGHT=1><TD></TD></TR><TR><TD>';
  LayerTag +=
    "<TABLE BGCOLOR='#FFFFFF' HEIGHT=15 WIDTH=100% CELLSPACING=1 CELLPADDING=0 STYLE='border:1 solid #C0C0C0;line-height:117%;' onmouseover=\"getSelectLayerOver(this,document.getElementById('" +
    newim +
    "'),document.getElementById('" +
    newid +
    '\'));" onmouseout="getSelectLayerOut(this,document.getElementById(\'' +
    newim +
    "'),document.getElementById('" +
    newid +
    '\'));">';

  LayerTag +=
    '<TR WIDTH=100% onclick="getSelectSubLayer(document.getElementById(\'' +
    newid +
    "'),document.getElementById('" +
    newsb +
    '\'));">';
  LayerTag +=
    "<TD ID='" +
    newsb +
    "' WIDTH=95% onblur='getSelectLayerBlur(this);'>&nbsp;" +
    obj.options[obj.selectedIndex].text +
    '</TD>';
  LayerTag +=
    "<TD ALIGN=RIGHT><IMG ID='" +
    newim +
    "' SRC='./image/ico/dot_select.gif' ALIGN=absmiddle STYLE='filter:gray();'></TD></TR>";

  LayerTag += '</TABLE>';

  LayerTag +=
    "<TABLE onblur='getSubLayerClose(this);' ID='" +
    newid +
    "' WIDTH=100% CELLSPACING=0 CELLPADDING=0 STYLE='display:none;border:1 solid #C0C0C0;' BGCOLOR='#FFFFFF'>";
  for (var i = 0; i < obj.length; i++) {
    LayerTag +=
      "<TR onmouseover='getSelectMoveLayer(this);' onmouseout='getSelectMoveLayer1(this);' onclick=\"getSelectChangeLayer(document.getElementById('" +
      obj.id +
      "'),document.getElementById('" +
      newid +
      "'),document.getElementById('" +
      newsb +
      "'),'" +
      obj.options[i].text +
      "','" +
      obj.options[i].value +
      "','" +
      href +
      '\');" ';

    if (obj.value == obj.options[i].value) {
      LayerTag += "STYLE='background:#225588;color:#FFFFFF;'><TD>&nbsp;";
    } else {
      LayerTag += "STYLE='background:#FFFFFF;color:#000000;'><TD>&nbsp;";
    }

    LayerTag += obj.options[i].text;
    LayerTag += '</TD></TR>';
  }
  LayerTag += '</TABLE>';
  LayerTag += "</TD></TR></TABLE><IMG SRC='' WIDTH='" + lwidth + "' HEIGHT=0>";

  document.write(LayerTag);
}

function getSelectSubLayer(obj, sobj) {
  if (obj.style.display == 'none') {
    sobj.style.background = '#FFFFFF';
    sobj.style.color = '#000000';
    obj.style.display = 'block';
    NowSelectedLayer = obj;
    obj.focus();
  } else {
    sobj.style.background = '#225588';
    sobj.style.color = '#FFFFFF';
    obj.style.display = 'none';
  }
}

function getSelectSubLayer1(obj) {
  if (obj.style.display != 'none') {
    obj.style.display = 'none';
  }
}

function getSelectLayerOver(obj, img, nobj) {
  if (nobj.style.display == 'none') {
    obj.style.border = '1 solid #225588';
    img.style.filter = '';
  }
}

function getSelectLayerOut(obj, img) {
  obj.style.border = '1 solid #C0C0C0';
  img.style.filter = 'gray()';
}

function getSelectMoveLayer(obj) {
  if (obj.style.color == '#000000') {
    obj.style.background = '#225588';
    obj.style.color = '#FFFFFF';
  }
}

function getSelectMoveLayer1(obj) {
  obj.style.background = '#FFFFFF';
  obj.style.color = '#000000';
}

function getSelectChangeLayer(obj, fobj, sobj, text, value, href) {
  if (href) {
    eval('document.DataForm.' + href).value = value;
    location.href = getThisUrl();
    return false;
  } else {
    fobj.style.display = 'none';
    sobj.innerHTML = '&nbsp;' + text;
    sobj.style.background = '#225588';
    sobj.style.color = '#FFFFFF';
    sobj.focus();
    obj.value = value;
  }
}

function getSelectLayerBlur(obj) {
  obj.style.background = '#FFFFFF';
  obj.style.color = '#000000';
}

function getSubLayerClose(obj) {
  if (obj.style.display != 'none') {
    setTimeout("document.getElementById('" + obj.id + "').style.display = 'none';", 150);
  }
}

$(document).on('ready', function () {
  $('.md_category_1').slick({
    lazyLoad: 'ondemand',
    fade: true,
    speed: 0,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 5000,
    pauseOnFocus: true,
    arrows: true,
    prevArrow: $('.md_category_1_prev'),
    nextArrow: $('.md_category_1_next')
  });

  $('.md_category_2').slick({
    lazyLoad: 'ondemand',
    fade: true,
    speed: 0,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 5000,
    pauseOnFocus: true,
    arrows: true,
    prevArrow: $('.md_category_2_prev'),
    nextArrow: $('.md_category_2_next')
  });

  $('#md_slide').scrollbox({
    direction: 'h',
    distance: 350
  });
});

function get_best_page(tab, cat) {
  $('.best100_tab').html($('.best100_tab_content').eq(tab).html());
}
// �� Ŭ�� �� - ���콺 ���� : $(".best100_cat .div_td").mouseenter(function () {
$(document).on('click mouseover', '.best100_cat .div_td', function (e) {
  $('.best100_cat .div_td').removeClass('active');
  $(this).addClass('active');
  get_best_page($('.best100_cat .div_td').index($(this)), $(this).data('cat'));
});
$(document).on('click', '.best100_tab .product', function (e) {
  location.href =
    'mall52f5.html?cat=' + $(this).data('cat') + '&query=view&no=' + $(this).data('uid') + '&ZG=11&ZT=����Ʈ100';
});
$(document).on('click', '.best100_page', function (e) {
  const active = $('.best100_cat').find('.active');
  const tab = $('.best100_cat .div_td').index(active);
  if (tab) {
    location.href = 'inc5009.html?inc=company/zbest&amp;tab=' + tab;
  } else {
    location.href = 'incc151.html?inc=company/zbest';
  }
});
var best100_interval;
var best100_timeout = 4000;
window.addEventListener('load', function (event) {
  get_best_page(0, '');
  best100_interval = setInterval(best100_rotate, best100_timeout);
});

function best100_rotate() {
  const tab = $('.best100_cat .div_td').index($('.best100_cat').find('.active'));
  const total_tab = $('.best100_cat').find('.div_td').length;
  let tab_next = tab + 1;
  if (tab_next == total_tab) tab_next = 0;
  $('.best100_cat').find('.div_td').eq(tab_next).click();
}
$('.best100_area')
  .mouseenter(function (e) {
    clearInterval(best100_interval);
  })
  .mouseleave(function (e) {
    best100_interval = setInterval(best100_rotate, best100_timeout);
  });

window.addEventListener('load', function (event) {
  $('.brand_slide').slick({
    lazyLoad: 'ondemand',
    fade: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 4000,
    pauseOnFocus: true,
    arrows: true,
    prevArrow: $('.btn_brand_prev'),
    nextArrow: $('.btn_brand_next')
  });
  $('.brand_slide a img')
    .mouseover(function () {
      if ($(this).data('rollover') != '') {
        $(this).attr('src', $(this).data('rollover'));
      }
    })
    .mouseout(function () {
      $(this).attr('src', $(this).data('ori'));
    });
});

var DOMReady = function (a, b, c) {
  (b = document), (c = 'addEventListener');
  b[c] ? b[c]('DOMContentLoaded', a) : window.attachEvent('onload', a);
};
DOMReady(function () {
  $('.top_banner1 li').hover(
    function (e) {
      var offset = $(this).position();
      $('.top_banner1_active')
        .css({
          top: offset.top - 2,
          left: offset.left - 3,
          width: $(this).width() + 6,
          height: $(this).height() + 4
        })
        .show();
    },
    function (e) {
      $('.top_banner1_active').hide();
    }
  );
});

function PassInputCheck() {
  var f = document.pass_check_form;

  if (f.COMP_PASS.value == '') {
    alert('ggggggg');
    f.COMP_PASS.focus();
    return false;
  }
}

function PassInputClose() {
  document.getElementById('PassCheckLayer').style.display = 'none';
}

function MM_reloadPage(init) {
  // reloads the window if Nav4 resized
  if (init == true)
    with (navigator) {
      if (appName == 'Netscape' && parseInt(appVersion) == 4) {
        document.MM_pgW = innerWidth;
        document.MM_pgH = innerHeight;
        onresize = MM_reloadPage;
      }
    }
  else if (innerWidth != document.MM_pgW || innerHeight != document.MM_pgH) location.reload();
}
MM_reloadPage(true);

function down_file(val) {
  alert('ȸ���α��� ���Ŀ� �ٿ�ε尡 �����մϴ�.');
  return false;
  if (val) location.href = 'zdownfiledeb1.html?zfolder=nfile&amp;dnfile=' + val + '&zwhen=company_file';
}
window.addEventListener('load', function (event) {
  var clipboard = new ClipboardJS('.btn_clip');
});

function popup_webhard() {
  box = 'my_popup1';
  $('#' + box).show();
  width = -1 * parseInt($('#' + box).width() / 2);
  height = -1 * parseInt($('#' + box).height() / 2);
  $('#' + box)
    .css('margin-left', width)
    .css('margin-top', height);
}

$('.cc_btn_open')
  .mouseenter(function () {
    var img = $(this).find('img');
    img.attr('src', img.data('hover'));
  })
  .mouseleave(function () {
    var img = $(this).find('img');
    img.attr('src', img.data('ori'));
  });

$(document).on('click', '.cc_btn_open', function () {
  $(this).hide();
  $('#confirm_consulting').show();
});
$(document).on('click', '.cc_btn_close', function () {
  $('#confirm_consulting').hide();
  $('.cc_btn_open').show();
});

function check_cc_login(f) {
  var mem_id = $.trim(f.MB_ID.value);
  var mem_pw = $.trim(f.MB_PW.value);
  if (mem_id == '') {
    // alert("���̵� �Էµ��� �ʾҽ��ϴ�. ���̵� �Է��� �ּ���.\n\n���̵�� ������+���������� 6~20�� ���̷� �Է��ϼž� �մϴ�.");
    // f.MB_ID.focus();
    korea_alert('���̵� �Էµ��� �ʾҽ��ϴ�. ���̵� �Է��� �ּ���.\n\n���̵�� ������+���������� 6~20�� ���̷� �Է��ϼž� �մϴ�.', {
      focus: f.MB_ID,
      width: 500
    });
    return false;
  }
  if (!/^[a-zA-Z0-9]+$/.test(mem_id)) {
    // mem_id = "";
    // alert("���̵�� ������ �� ���ڷθ� ����� �� �ֽ��ϴ�.");
    // f.MB_ID.focus();
    korea_alert('���̵�� ������ �� ���ڷθ� ����� �� �ֽ��ϴ�.', {
      focus: f.MB_PW
    });
    return false;
  }
  if (mem_id.length < 5 || mem_id.length > 20) {
    // 6 �̻�
    // alert("���̵�� ������+���������� 6~20�� ���̷� �Է��ϼž� �մϴ�.");
    // f.MB_ID.focus();
    korea_alert('���̵�� ������+���������� 6~20�� ���̷� �Է��ϼž� �մϴ�.', {
      focus: f.MB_PW
    });
    return false;
  }
  if (mem_pw.length < 6 || mem_pw.length > 20) {
    // alert("�н������ 6�� �̻� 20�� �����̾�� �մϴ�.");
    // f.MB_PW.focus();
    korea_alert('�н������ 6�� �̻� 20�� �����̾�� �մϴ�.', {
      focus: f.MB_PW
    });
    return false;
  }
  return true;
}

$(document).on('click', '.btn_cc_start', function () {
  var is_personal = parseInt($('input[name=is_personal]:checked').val()) | 0;
  var name = $('#cc_name');
  name.val($.trim(name.val()));
  var company = $('#cc_company');
  company.val($.trim(company.val()));
  if (is_personal) {
    // ����
    if (name.val() == '') {
      korea_alert('�������� �Է����ּ���.', {
        focus: name
      });
      return false;
    }
  } else {
    // ���
    if (name.val() == '') {
      korea_alert('�������� �Է����ּ���.', {
        focus: name
      });
      return false;
    }
    if (company.val() == '') {
      korea_alert('��ȣ���� �Է����ּ���.\n�����̽� ��� ���ζ��� üũ�� �ּ���.', {
        focus: company
      });
      return false;
    }
  }
  var hp1 = $('.cc_in_tel1');
  hp1.val(hp1.val().replace(/[^\d]/g, ''));
  var hp2 = $('.cc_in_tel2');
  hp2.val(hp2.val().replace(/[^\d]/g, ''));
  var hp3 = $('.cc_in_tel3');
  hp3.val(hp3.val().replace(/[^\d]/g, ''));
  if (hp1.val() !== '010') {
    // alert("010�� �Է� �����մϴ�.");
    // hp1.focus();
    korea_alert('010�� �Է� �����մϴ�.', {
      focus: hp1
    });
    return false;
  }
  if (hp2.val().length < 3) {
    // alert("�޴��� ��ȣ�� �Է����ּ���.");
    // hp2.focus();
    korea_alert('�޴��� ��ȣ�� �Է����ּ���.', {
      focus: hp2
    });
    return false;
  }
  if (hp3.val().length < 4) {
    // alert("�޴��� ��ȣ�� �Է����ּ���.");
    // hp3.focus();
    korea_alert('�޴��� ��ȣ�� �Է����ּ���.', {
      focus: hp3
    });
    return false;
  }

  if (!$('#cc_chk').is(':checked')) {
    // alert("�������� �������ǰ� �ʿ��մϴ�.");
    // $("#cc_chk").focus();
    korea_alert('�������� �������ǰ� �ʿ��մϴ�.', {
      focus: $('#cc_chk')
    });
    return false;
  }
  $.ajax({
    method: 'POST',
    url: '/ez/zsend_hp.php',
    dataType: 'JSON',
    data: {
      mode: 'cc_start_consult',
      is_personal: is_personal,
      company: company.val(),
      name: name.val(),
      hp1: hp1.val(),
      hp2: hp2.val(),
      hp3: hp3.val(),
      agree: $('#cc_chk').is(':checked') ? 1 : 0
    },
    success: function (data) {
      if (data.error) {
        if (data.msg) {
          alert(data.msg);
          //					korea_alert(data.msg);
        }
      } else {
        location.reload();
      }
    }
  });
});

// ���� ����/�ݱ�
$(document).on('click', '.cc_sub_title', function () {
  var btn_toggle = $(this).find('.toggle');
  if (btn_toggle.length) {
    $('.cc_layout').find('.toggle').html('-');
    $('.cc_layout').find('.toggle_area').hide();
    if (btn_toggle.html() == '-') {
      $('.cc_layout').find('.toggle').html('-');
      $('.cc_layout').find('.toggle_area').hide();
      btn_toggle.html('+');
      btn_toggle.closest('.cc_out_box').find('.toggle_area').show();
      btn_toggle.closest('.cc_out_box').find('.cc_input')[0].focus();
    }
  }
});

// ���� üũ
$(document).on('click', 'input[name=is_personal]:checked', function () {
  var is_personal = parseInt($(this).val()) | 0;
  if (is_personal) {
    if (!$('#cc_name').val().length && $('#cc_company').val().length) {
      // $("#cc_name").val($("#cc_company").val());
    } else if ($('#cc_name').val().length && !$('#cc_company').val().length) {
      // $("#cc_company").val($("#cc_name").val());
    } else if (!$('#cc_name').val().length) {
      // $(".cc_alert_content").html("�������� �Է����ּ���.");
      // $(".cc_alert").show();
      // korea_alert("�������� �Է����ּ���.", {focus: $("#cc_name")});
    }
    // $("#cc_company").val("");
    $('#cc_company').addClass('disable');
    $('#cc_company').attr('readonly', true);
    $('#cc_name').focus();
  } else {
    $('#cc_company').removeClass('disable');
    $('#cc_company').removeAttr('readonly');
    $('#cc_name').focus();
  }
});

// �޴��� �߰� ��ȣ �Ϸ� �� ����
$('.cc_in_tel2').keyup(function () {
  $(this).val(
    $(this)
      .val()
      .replace(/[^\d]+/g, '')
  );
  if ($(this).val().length == 4) {
    $('.cc_in_tel3').focus();
  }
});

$(document).on('click', '.btn_cc_agree', function () {
  var w = 600;
  var h = 400;
  var left = screen.width / 2 - w / 2;
  var top = screen.height / 2 - h / 2;
  var cc_win = window.open(
    'doc/other/PrivacyConsent.html',
    'cc_agree',
    'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=no, width=' +
      w +
      ', height=' +
      h +
      ', top=' +
      top +
      ', left=' +
      left
  );
  cc_win.focus();
});

function nsWindowReset() {
  if ($('#ctrlbar').is(':visible') == false) {
    setTimeout(nsWindowReset, 100);
  } else {
    $('#nswindow').css({
      top: 50
    });
  }
}

function zorderform2() {
  window.open('doc/other/order_form.html', '', 'width=720,height=700,top=50,left=100,scrollbars=yes');
}

function usafe(strActPage) {
  window.open(
    'http://www.usafe.co.kr/usafeShopCheck.asp?com_no=' + strActPage,
    '',
    'width=520, height=400, scrollbars=no, location=yes, status=yes, left=0, top=0'
  );
}

var wptg_tagscript_vars = wptg_tagscript_vars || [];
wptg_tagscript_vars.push(function () {
  return {
    wp_hcuid: '',

    ti: '52814',

    ty: 'Home',

    device: 'web'
  };
});

if (!wcs_add) var wcs_add = {};
wcs_add['wa'] = 's_1f0bf7ea28d1';
if (!_nasa) var _nasa = {};
wcs.inflow();
wcs_do(_nasa);

$('.unselectable')
  .attr('unselectable', 'on')
  .css({
    '-moz-user-select': '-moz-none',
    '-moz-user-select': 'none',
    '-o-user-select': 'none',
    '-khtml-user-select': 'none',
    '-webkit-user-select': 'none',
    '-ms-user-select': 'none',
    'user-select': 'none'
  })
  .bind('selectstart', function () {
    return false;
  });
$(function () {
  $('img.lazy').lazyload({
    effect: 'fadeIn'
  });
});
$(document).on('click', 'html', function (e) {
  var temp_popular = $(e.target).closest('#top_popular');
  if (!temp_popular.length) {
    if ($('#popular_list').is(':visible')) $('#popular_list').slideUp('fast');
  }
});

var fixed_left;
let use_left_fix = 0;
fixed_left = function () {
  var position = $(window).scrollTop();
  $('#STATICMENU').show();
  $('#right_wing').show();
  // $("#right_wing_ai").show();
  $('#right_wing_top').show();

  if (position > $('#right_quick').offset().top + $('#right_quick').height() - 80) {
    $('#right_wing').addClass('wing_right_fixed');
  } else {
    $('#right_wing').removeClass('wing_right_fixed');
  }

  if (position > 160) {
    fixed_bar(1);
    // a.hide(); $("#main_keyword").blur();
  } else {
    fixed_bar(0);
  }
};

function fixed_bar(status) {
  if (status) {
    $('#fixed_header').show();
    // if ( $("#div_category_all").is(":visible") ) $("#fixed_blank").show();
    $('#div_category_all').addClass('fh_all');
    $('[id^=AutocompleteContainter]').eq(0).addClass('auto_fixed');
    $('[id^=AutocompleteContainter]').eq(0).removeClass('auto_manual');
    $('.search_area').addClass('to_fixed');
  } else {
    $('#fixed_header').hide();
    // $("#fixed_blank").hide();
    $('#div_category_all').removeClass('fh_all');
    $('[id^=AutocompleteContainter]').eq(0).removeClass('auto_fixed');
    $('[id^=AutocompleteContainter]').eq(0).addClass('auto_manual');
    $('.search_area').removeClass('to_fixed');
  }
}

$(document).on('click', '#fixed_blank', function (e) {
  toggle_category_all();
});

window.addEventListener('load', function (e) {
  // 2023-10-12(��) - �׸� ��ȹ��
  if ($('.main_plan_slides').length) {
    var plan_delay = 1;
    $('.main_plan_slides').slick({
      lazyLoad: 'ondemand',
      fade: true,
      infinite: true,
      autoplay: true,
      autoplaySpeed: $('.main_plan_slides').data('delay') * 1000,
      pauseOnFocus: true,
      arrows: true,
      prevArrow: $('.main_btn_plan_prev'),
      nextArrow: $('.main_btn_plan_next')
    });
  }

  fixed_left();

  if ($('.page_table')[0]) {
    function setUrlParameter(url, k, v, state) {
      var newUrl;
      var regex1 = new RegExp('[?&]' + k + '\\s*=');
      var regex2 = new RegExp('(?:([?&])' + k + '\\s*=[^?&]*)');
      if (regex1.test(url)) {
        newUrl = url.replace(regex2, '$1' + k + '=' + v);
      } else if (/\?/.test(url)) {
        newUrl = url + '&' + k + '=' + v;
      } else {
        newUrl = url + '?' + k + '=' + v;
      }
      history.pushState(state, null, newUrl);
    }

    function getUrlParameter(name) {
      name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
      var regex = new RegExp('[\\?&]' + name + '=([^&#]*)'),
        results = regex.exec(location.search);
      return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    }

    const inc_val = getUrlParameter('inc').split('https://adpanchok.co.kr/')[1];
    const tab_val = getUrlParameter('tab');
    if (inc_val === 'all_event') {
      // inc_val==="zplan"

      function page_tab_menu(idx) {
        idx = parseInt(idx);
        $('.page_table tr td').removeClass('active');
        $('.page_table tr td').eq(idx).addClass('active');
        if (!idx) {
          $('.page_tabs .tab').show();
        } else {
          $('.page_tabs .tab').hide();
          $('.page_tabs .tab')
            .eq(idx - 1)
            .show();
        }
        localStorage.page = inc_val;
        localStorage.tab = idx;
      }

      // Ŭ�� �� Ȱ��ȭ
      $('.page_table tr td').on('click', function (e) {
        e.preventDefault();
        if ($(this).hasClass('active')) return false;
        var idx = $(this).index();
        page_tab_menu(idx);
      });

      if (localStorage.page && localStorage.page === inc_val) {
        page_tab_menu(localStorage.tab);
        // localStorage.removeItem("page");
        // localStorage.removeItem("tab");
      } else {
        page_tab_menu(0);
      }
      /*
                    var tabCheck = 0;
                    $(".page_table tr td").each(function () {
                    	if ( $(this).hasClass("active") ) tabCheck++;
                    });
                    if ( !tabCheck ) page_tab_menu(0);
                    */
    } // ��ȹ��, �̺�Ʈ/����
  }
});

// ä�� ����/���
function open_chat() {
  if ($('.cc_btn_open')[0]) {
    // ��ȸ��
    $('.cc_btn_open').click();
  } else {
    // ȸ��
    window.CHPlugin.show();
  }
}

$(window).resize(fixed_left).scroll(fixed_left);

var korea_is_mobile = 0,
  korea_opt,
  korea_alert = function (msg, opt) {
    korea_opt = opt;
    if (opt.width) {
      if (korea_is_mobile && opt.width > 400) opt.width = 400;
      $('.kga_box').width((opt.width ? opt.width : '400') + 'px');
    }
    msg = msg.replace(/\n/g, '<br>');
    $('#kga_content').html(msg);
    $('.kga_layer').show();
    $('.kga_btn_close').focus();
  };
$(document).on('click', '.kga_btn_x, .kga_btn_close', function () {
  $('.kga_layer').hide();
  if (korea_opt.focus) {
    korea_opt.focus.focus();
    setTimeout(function () {
      korea_opt.focus = null;
    }, 50);
  }
});

function layer_popup_ur_close(opt) {
  $('#layer_popup_ur').hide();
  if (opt) setCookie('layer_popup_ur', 'done', 1);
}
$(function () {
  // �ε� �� ����
  if (getCookie('layer_popup_ur') != 'done') {
    $('#layer_popup_ur').show();
  } else {
    $('#layer_popup_ur').hide();
  }
});

function to_manager_leftmenu() {
  alert('login');
  location.href = 'login.html';
  return false;
}

function open_csr() {
  location.href = 'bbsa3a8.html?table=csr&amp;query=view&amp;uid=72';
}
