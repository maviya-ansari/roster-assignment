<?php
$html = <<<HTML
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name=Generator content="FastReport 4.0 http://www.fast-report.com">
<title>Personal Crew Schedule Report</title><style>a, input, button{  pointer-events:none;  }</style>
<style type="text/css">
    <!-- 
.page_break {page-break-before: always;}
.s0 {
 font-family: Tahoma;
 font-size: 11px;
 color: #FFFFFF; font-weight: bold; font-style: normal;
 background-color: #808080;
 text-align: Center; vertical-align: Middle;
}
.s1 {
 font-family: Arial;
 font-size: 9px;
 color: #000000; font-style: normal;
 background-color: #C0DCC0;
 border-color:#000000; border-style: solid;
 border-left-width: 1;
 border-right-width: 1;
 border-top-width: 1;
 border-bottom-width: 1;
 text-align: Center; vertical-align: Middle;
}
.s2 {
 font-family: Courier New;
 font-size: 12px;
 color: #FFFF00; font-weight: bold; font-style: normal;
 background-color: #000000;
 border-color:#000000; border-style: solid;
 border-left-width: 1;
 border-right-width: 1;
 border-top-width: 1;
 border-bottom-width: 1;
 text-align: Left; vertical-align: Top;
}
.s3 {
 font-family: Arial;
 font-size: 9px;
 color: #000000; font-style: normal;
 background-color: transparent;
 border-color:#000000; border-style: solid;
 border-left-width: 1;
 border-right-width: 1;
 border-top-width: 0px;
 border-bottom-width: 0px;
 text-align: Left; vertical-align: Top;
}
.s4 {
 font-family: Arial;
 font-size: 9px;
 color: #000000; font-style: normal;
 background-color: transparent;
 border-color:#000000; border-style: solid;
 border-left-width: 1;
 border-right-width: 1;
 border-top-width: 0px;
 border-bottom-width: 0px;
 text-align: Left; vertical-align: Top;
}
.s5 {
 font-family: Arial;
 font-size: 9px;
 color: #000000; font-style: normal;
 background-color: #FFFF00;
 border-color:#000000; border-style: solid;
 border-left-width: 1;
 border-right-width: 1;
 border-top-width: 0px;
 border-bottom-width: 0px;
 text-align: Left; vertical-align: Top;
}
.s6 {
 font-family: Arial;
 font-size: 1px;
 color: #000000; font-style: normal;
 background-color: transparent;
 border-color:#000000; border-style: solid;
 border-left-width: 0px;
 border-right-width: 0px;
 border-top-width: 1;
 border-bottom-width: 0px;
 text-align: Left; vertical-align: Top;
}
.s7 {
 font-family: courier New;
 font-size: 11px;
 color: #000000; font-weight: bold; font-style: normal;
 background-color: transparent;
 border-color:#000000; border-style: solid;
 border-left-width: 2;
 border-right-width: 2;
 border-top-width: 2;
 border-bottom-width: 2;
 text-align: Left; vertical-align: Top;
}
.s8 {
 font-family: Courier New;
 font-size: 11px;
 color: #000000; font-weight: bold; font-style: normal;
 background-color: transparent;
 border-color:#000000; border-style: solid;
 border-left-width: 2;
 border-right-width: 2;
 border-top-width: 2;
 border-bottom-width: 2;
 text-align: Left; vertical-align: Top;
}
.s9 {
 font-family: Courier New;
 font-size: 11px;
 color: #000000; font-weight: bold; font-style: normal;
 background-color: transparent;
 text-align: Left; vertical-align: Top;
}
.s10 {
 font-family: Courier New;
 font-size: 11px;
 color: #000000; font-weight: bold; font-style: normal;
 background-color: transparent;
 border-color:#000000; border-style: solid;
 border-left-width: 2;
 border-right-width: 2;
 border-top-width: 2;
 border-bottom-width: 0px;
 text-align: Left; vertical-align: Top;
}
.s11 {
 font-family: Arial;
 font-size: 9px;
 color: #000000; font-style: normal;
 background-color: transparent;
 border-color:#000000; border-style: solid;
 border-left-width: 0px;
 border-right-width: 0px;
 border-top-width: 2;
 border-bottom-width: 0px;
 text-align: Left; vertical-align: Top;
}
.s12 {
 font-family: Arial;
 font-size: 9px;
 color: #000000; font-style: normal;
 background-color: transparent;
 text-align: Left; vertical-align: Top;
}
.s13 {
 font-family: Arial;
 font-size: 9px;
 color: #000000; font-style: normal;
 background-color: transparent;
 text-align: Right; vertical-align: Top;
}
.s14 {
 font-family: Arial;
 font-size: 9px;
 color: #000000; font-style: normal;
 background-color: #C0DCC0;
 border-color:#000000; border-style: solid;
 border-left-width: 0px;
 border-right-width: 1;
 border-top-width: 1;
 border-bottom-width: 1;
 text-align: Center; vertical-align: Middle;
}
.s15 {
 font-family: Arial;
 font-size: 9px;
 color: #000000; font-style: normal;
 background-color: transparent;
 border-color:#000000; border-style: solid;
 border-left-width: 0px;
 border-right-width: 1;
 border-top-width: 0px;
 border-bottom-width: 0px;
 text-align: Left; vertical-align: Top;
}
.s16 {
 font-family: Arial;
 font-size: 9px;
 color: #000000; font-style: normal;
 background-color: transparent;
 border-color:#000000; border-style: solid;
 border-left-width: 0px;
 border-right-width: 1;
 border-top-width: 0px;
 border-bottom-width: 0px;
 text-align: Left; vertical-align: Top;
}
.s17 {
 font-family: Arial;
 font-size: 9px;
 color: #000000; font-style: normal;
 background-color: #FFFF00;
 border-color:#000000; border-style: solid;
 border-left-width: 0px;
 border-right-width: 1;
 border-top-width: 0px;
 border-bottom-width: 0px;
 text-align: Left; vertical-align: Top;
}
-->
</style>
</head>
<body bgcolor="#FFFFFF" text="#000000">
<a name="PageN1"></a>
<table width="1085" border="0" cellspacing="0" cellpadding="0">
<tr style="height: 1px"><td width="34" /><td width="34" /><td width="27" /><td width="8" /><td width="34" /><td width="34" /><td width="34" /><td width="6" /><td width="5" /><td width="23" /><td width="14" /><td width="20" /><td width="34" /><td width="34" /><td width="8" /><td width="5" /><td width="21" /><td width="11" /><td width="23" /><td width="34" /><td width="34" /><td width="34" /><td width="20" /><td width="14" /><td width="34" /><td width="34" /><td width="34" /><td width="34" /><td width="34" /><td width="34" /><td width="34" /><td width="34" /><td width="34" /><td width="34" /><td width="34" /><td width="34" /><td width="34" /><td width="23" /><td width="11" /><td width="34" /><td width="30" /></tr>
<tr style="height:26px">
<td colspan="41" class="s0">Personal&nbsp;Crew&nbsp;Schedule&nbsp;Report.&nbsp;Period:&nbsp;29/05/2018&nbsp;to&nbsp;28/06/2018<br>All&nbsp;times&nbsp;in&nbsp;UTC,&nbsp;Actual,&nbsp;showing&nbsp;crew&nbsp;check-in/check-out&nbsp;times</td>
</tr>
<tr style="height:27px">
<td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td />
</tr>
<tr style="height:29px">
<td colspan="41" class="s2">NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;KARL&nbsp;JOHNSON&nbsp;<br>ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;12345&nbsp;(LGW&nbsp;FA-319,320&nbsp;)&nbsp;</td>
</tr>
<tr style="height:2px">
<td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td />
</tr>
<tr style="height:26px">
<td class="s1">May29<br>Tue</td><td class="s14">May30<br>Wed</td><td colspan="2" class="s14">May31<br>Thu</td><td class="s14">Jun01<br>Fri</td><td class="s14">Jun02<br>Sat</td><td class="s14">Jun03<br>Sun</td><td colspan="3" class="s14">Jun04<br>Mon</td><td colspan="2" class="s14">Jun05<br>Tue</td><td class="s14">Jun06<br>Wed</td><td class="s14">Jun07<br>Thu</td><td colspan="3" class="s14">Jun08<br>Fri</td><td colspan="2" class="s14">Jun09<br>Sat</td><td class="s14">Jun10<br>Sun</td><td class="s14">Jun11<br>Mon</td><td class="s14">Jun12<br>Tue</td><td colspan="2" class="s14">Jun13<br>Wed</td><td class="s14">Jun14<br>Thu</td><td class="s14">Jun15<br>Fri</td><td class="s14">Jun16<br>Sat</td><td class="s14">Jun17<br>Sun</td><td class="s14">Jun18<br>Mon</td><td class="s14">Jun19<br>Tue</td><td class="s14">Jun20<br>Wed</td><td class="s14">Jun21<br>Thu</td><td class="s14">Jun22<br>Fri</td><td class="s14">Jun23<br>Sat</td><td class="s14">Jun24<br>Sun</td><td class="s14">Jun25<br>Mon</td><td class="s14">Jun26<br>Tue</td><td colspan="2" class="s14">Jun27<br>Wed</td><td class="s14">Jun28<br>Thu</td><td class="s14" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3">D/O</td><td class="s15">ESBY</td><td colspan="2" class="s15">8751</td><td class="s16">8462</td><td class="s16">CSBE</td><td class="s16">D/O</td><td colspan="3" class="s16">D/O</td><td colspan="2" class="s16">D/O</td><td class="s16">D/O</td><td class="s16">D/O</td><td colspan="3" class="s16">8113</td><td colspan="2" class="s17">8274</td><td class="s16">D/O</td><td class="s16">D/O</td><td class="s16">ESBY</td><td colspan="2" class="s16">8973</td><td class="s16">ADTY</td><td class="s16">8233</td><td class="s15">D/O</td><td class="s16">D/O</td><td class="s16">807</td><td class="s16">8551</td><td class="s16">8186</td><td class="s16">807</td><td class="s16">8663</td><td class="s16">D/O</td><td class="s16">D/O</td><td class="s16">D/O</td><td class="s17">891</td><td colspan="2" class="s16">8601</td><td class="s16">INTV</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15">06:00</td><td colspan="2" class="s15">03:55</td><td class="s16">04:30</td><td class="s16">02:00</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16">05:05</td><td colspan="2" class="s17">04:00</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">05:15</td><td colspan="2" class="s16">04:05</td><td class="s16">09:30</td><td class="s16">12:25</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">11:35</td><td class="s16">10:50</td><td class="s16">14:05</td><td class="s16">11:35</td><td class="s16">10:25</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17">05:10</td><td colspan="2" class="s16">03:45</td><td class="s16">07:30</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15">14:00</td><td colspan="2" class="s15">04:55</td><td class="s16">05:30</td><td class="s16">10:00</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16">06:05</td><td colspan="2" class="s17">05:00</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">13:15</td><td colspan="2" class="s16">05:05</td><td class="s16">16:30</td><td class="s16">13:25</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">12:35</td><td class="s16">11:50</td><td class="s16">15:05</td><td class="s16">12:35</td><td class="s16">11:25</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17">06:10</td><td colspan="2" class="s16">04:45</td><td class="s16">16:00</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td colspan="2" class="s15">LGW</td><td class="s16">LGW</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16">LGW</td><td colspan="2" class="s17">MAD</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16">LGW</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">LGW</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">LGW</td><td class="s16">LGW</td><td class="s16">LIN</td><td class="s16">LGW</td><td class="s16">LGW</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17">LGW</td><td colspan="2" class="s16">LGW</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td colspan="2" class="s15">CFU</td><td class="s16">GVA</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16">ZRH</td><td colspan="2" class="s17">LGW</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16">SOF</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">PSA</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">EDI</td><td class="s16">MJV</td><td class="s16">LGW</td><td class="s16">EDI</td><td class="s16">ALC</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17">JER</td><td colspan="2" class="s16">AGP</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td colspan="2" class="s15">08:00</td><td class="s16">07:10</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16">07:50</td><td colspan="2" class="s17">07:25</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16">08:05</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">15:40</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">14:10</td><td class="s16">14:30</td><td class="s16">16:50</td><td class="s16">14:10</td><td class="s16">13:55</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17">07:15</td><td colspan="2" class="s16">07:45</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td colspan="2" class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s17" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td colspan="2" class="s15">8752</td><td class="s16">8465</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16">8114</td><td colspan="2" class="s17">8221</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16">8974</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">8234</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">808</td><td class="s16">8552</td><td class="s16">8985</td><td class="s16">808</td><td class="s16">8664</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17">892</td><td colspan="2" class="s16">8602</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td colspan="2" class="s15">08:35</td><td class="s16">07:45</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16">08:25</td><td colspan="2" class="s17">08:10</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16">08:50</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">16:10</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">14:35</td><td class="s16">15:00</td><td class="s16">17:30</td><td class="s16">14:35</td><td class="s16">14:30</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17">08:00</td><td colspan="2" class="s16">08:20</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td colspan="2" class="s15">CFU</td><td class="s16">GVA</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16">ZRH</td><td colspan="2" class="s17">LGW</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16">SOF</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">PSA</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">EDI</td><td class="s16">MJV</td><td class="s16">LGW</td><td class="s16">EDI</td><td class="s16">ALC</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17">JER</td><td colspan="2" class="s16">AGP</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td colspan="2" class="s15">LGW</td><td class="s16">LGW</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16">LGW</td><td colspan="2" class="s17">VLC</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16">LGW</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">LGW</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">LGW</td><td class="s16">LGW</td><td class="s16">MUC</td><td class="s16">LGW</td><td class="s16">LGW</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17">LGW</td><td colspan="2" class="s16">LGW</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td colspan="2" class="s15">11:55</td><td class="s16">09:20</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16">10:10</td><td colspan="2" class="s17">10:30</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16">12:10</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">18:25</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">16:15</td><td class="s16">17:40</td><td class="s16">19:25</td><td class="s16">16:15</td><td class="s16">17:10</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17">09:00</td><td colspan="2" class="s16">11:10</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td colspan="2" class="s15">12:25</td><td class="s16">09:50</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s17" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16">12:40</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">18:55</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16">11:40</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td colspan="2" class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16">8277</td><td colspan="2" class="s17">8222</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">837</td><td class="s16">8187</td><td class="s16">8986</td><td class="s16">837</td><td class="s16">8881</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17">841</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td colspan="2" class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16">11:05</td><td colspan="2" class="s17">11:05</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">16:50</td><td class="s16">18:55</td><td class="s16">19:55</td><td class="s16">16:55</td><td class="s16">17:40</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17">09:30</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td colspan="2" class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16">LGW</td><td colspan="2" class="s17">VLC</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">LGW</td><td class="s16">LGW</td><td class="s16">MUC</td><td class="s16">LGW</td><td class="s16">LGW</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17">LGW</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td colspan="2" class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16">MAD</td><td colspan="2" class="s17">LGW</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">BFS</td><td class="s16">LIN</td><td class="s16">LGW</td><td class="s16">BFS</td><td class="s16">AMS</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17">BFS</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td colspan="2" class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16">13:40</td><td colspan="2" class="s17">14:00</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">18:25</td><td class="s16">20:50</td><td class="s16">21:55</td><td class="s16">18:25</td><td class="s16">18:55</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17">11:05</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td colspan="2" class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16">14:10</td><td colspan="2" class="s17">14:30</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">21:20</td><td class="s16">22:25</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td colspan="2" class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s17" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">840</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">840</td><td class="s16">8884</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17">842</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td colspan="2" class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s17" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">18:55</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">18:55</td><td class="s16">19:25</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17">11:30</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td colspan="2" class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s17" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">BFS</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">BFS</td><td class="s16">AMS</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17">BFS</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td colspan="2" class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s17" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">LGW</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">LGW</td><td class="s16">LGW</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17">LGW</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td colspan="2" class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s17" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">20:25</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">20:25</td><td class="s16">20:45</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17">12:55</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td colspan="2" class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s17" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">20:55</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">20:55</td><td class="s16">21:15</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17">13:25</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td colspan="2" class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16">R</td><td colspan="2" class="s17">NR</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">R</td><td class="s16">R</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17">N</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16">M</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td colspan="2" class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s17" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td colspan="2" class="s15">&nbsp;6:25</td><td class="s16">&nbsp;3:15</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16">&nbsp;6:05</td><td colspan="2" class="s17">&nbsp;7:40</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16">&nbsp;6:20</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">&nbsp;4:30</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">&nbsp;6:20</td><td class="s16">&nbsp;7:15</td><td class="s16">&nbsp;5:40</td><td class="s16">&nbsp;6:15</td><td class="s16">&nbsp;7:45</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17">&nbsp;5:05</td><td colspan="2" class="s16">&nbsp;5:50</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">Block</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15">&nbsp;8:00</td><td colspan="2" class="s15">&nbsp;8:30</td><td class="s16">&nbsp;5:20</td><td class="s16">&nbsp;8:00</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16">&nbsp;9:05</td><td colspan="2" class="s17">10:30</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">&nbsp;8:00</td><td colspan="2" class="s16">&nbsp;8:35</td><td class="s16">&nbsp;7:00</td><td class="s16">&nbsp;6:30</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16">&nbsp;9:20</td><td class="s16">10:30</td><td class="s16">&nbsp;8:20</td><td class="s16">&nbsp;9:20</td><td class="s16">10:50</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17">&nbsp;8:15</td><td colspan="2" class="s16">&nbsp;7:55</td><td class="s16">&nbsp;8:30</td><td class="s16">Duty</td>
</tr>
<tr style="height:11px">
<td class="s3" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td colspan="2" class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="3" class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s17" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s15" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s17" style="font-size:1px">&nbsp;</td><td colspan="2" class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td><td class="s16" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:1px">
<td colspan="41" class="s6" style="font-size:1px">&nbsp;</td>
</tr>
<tr style="height:24px">
<td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td />
</tr>
<tr style="height:15px">
<td colspan="8" class="s9">CODE&nbsp;EXPLANATIONS</td><td /><td colspan="6" class="s9">TOTALS</td><td /><td colspan="7" class="s9">INDICATORS</td><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td />
</tr>
<tr style="height:15px">
<td colspan="8" class="s10">CODE|DESCRIPTION</td><td /><td colspan="6" rowspan="3" class="s7">Block&nbsp;Hours&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;78:25<br>Duty&nbsp;Hours&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;152:30</td><td /><td colspan="7" rowspan="2" class="s7">N|NOTIFICATION<br>M|MEMO<br>R|REQUESTED&nbsp;FLIGHT</td><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td />
</tr>
<tr style="height:32px">
<td colspan="8" rowspan="3" class="s8">D/O&nbsp;|Day&nbsp;off<br>ESBY|Early&nbsp;Standby<br>CSBE|Crewing&nbsp;Standby&nbsp;Early<br>ADTY|Airport&nbsp;Duty&nbsp;on&nbsp;Standby<br>INTV|Interviews&nbsp;/&nbsp;Interviewing</td><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td />
</tr>
<tr style="height:6px">
<td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td />
</tr>
<tr style="height:40px">
<td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td />
</tr>
<tr style="height:1px">
<td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td />
</tr>
<tr style="height:15px">
<td colspan="11" class="s9">MEMOS</td><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td />
</tr>
<tr style="height:15px">
<td colspan="11" class="s10">DATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MEMO</td><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td />
</tr>
<tr style="height:16px">
<td colspan="11" class="s7">28/06/2018&nbsp;CM&nbsp;Assessment&nbsp;ref&nbsp;S&nbsp;Brock</td><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td />
</tr>
<tr style="height:88px">
<td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td />
</tr>
<tr style="height:1px">
<td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td />
</tr>
<tr style="height:22px">
<td colspan="3" class="s12">5/29/2018&nbsp;8:56:19&nbsp;AM</td><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td colspan="3" class="s13">Page&nbsp;1</td>
</tr>
</table>
<a name="PageN2"></a>
<table width="1085" border="0" cellspacing="0" cellpadding="0" class="page_break">
<tr style="height: 1px"><td width="34" /><td width="34" /><td width="27" /><td width="8" /><td width="34" /><td width="34" /><td width="34" /><td width="6" /><td width="5" /><td width="23" /><td width="14" /><td width="20" /><td width="34" /><td width="34" /><td width="8" /><td width="5" /><td width="21" /><td width="11" /><td width="23" /><td width="34" /><td width="34" /><td width="34" /><td width="20" /><td width="14" /><td width="34" /><td width="34" /><td width="34" /><td width="34" /><td width="34" /><td width="34" /><td width="34" /><td width="34" /><td width="34" /><td width="34" /><td width="34" /><td width="34" /><td width="34" /><td width="23" /><td width="11" /><td width="34" /><td width="30" /></tr>
<tr style="height:19px">
<td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td />
</tr>
<tr style="height:15px">
<td colspan="18" class="s9">HOTEL&nbsp;INFORMATION&nbsp;IN&nbsp;LOCAL&nbsp;STATION</td><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td />
</tr>
<tr style="height:15px">
<td colspan="18" class="s10">PORT&nbsp;&nbsp;NAME&nbsp;/&nbsp;ADDRESS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TELEPHONE</td><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td />
</tr>
<tr style="height:124px">
<td colspan="18" class="s8">&nbsp;MAD&nbsp;&nbsp;OPERATIONAL&nbsp;HOTEL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please&nbsp;view&nbsp;MyHATS&nbsp;for&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hotel&nbsp;Information&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;DATE:Jun08&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;LIN&nbsp;&nbsp;OPERATIONAL&nbsp;HOTEL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please&nbsp;view&nbsp;MyHATS&nbsp;for&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hotel&nbsp;Information&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;DATE:Jun19&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td />
</tr>
<tr style="height:46px">
<td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td />
</tr>
<tr style="height:302px">
<td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td />
</tr>
<tr style="height:1px">
<td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td />
</tr>
<tr style="height:22px">
<td colspan="3" class="s12">5/29/2018&nbsp;8:56:19&nbsp;AM</td><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td /><td colspan="3" class="s13">Page&nbsp;2</td>
</tr>
</table>
</body></html>
HTML;

// $dom = new DOMDocument();  

// //load the html  
// $dom->loadHTML($html);  

//   //discard white space   
// $dom->preserveWhiteSpace = false;   

//   //the table by its tag name  
// $tables = $dom->getElementsByTagName('table');   


//     //get all rows from the table  
// $rows = $tables->item(0)->getElementsByTagName('tr');   
//   // get each column by tag name  
// $cols = $rows->item(0)->getElementsByTagName('th');   
// $row_headers = NULL;
// foreach ($cols as $node) {
//     //print $node->nodeValue."\n";   
//     $row_headers[] = $node->nodeValue;
// }   

// $table = array();


// // object(DOMElement)#262 (18) { ["tagName"]=> string(2) "td" ["schemaTypeInfo"]=> NULL ["nodeName"]=> string(2) "td" ["nodeValue"]=> string(8) "May29Tue" ["nodeType"]=> int(1) ["parentNode"]=> string(22) "(object value omitted)" ["childNodes"]=> string(22) "(object value omitted)" ["firstChild"]=> string(22) "(object value omitted)" ["lastChild"]=> string(22) "(object value omitted)" ["previousSibling"]=> string(22) "(object value omitted)" ["nextSibling"]=> string(22) "(object value omitted)" ["attributes"]=> string(22) "(object value omitted)" ["ownerDocument"]=> string(22) "(object value omitted)" ["namespaceURI"]=> NULL ["prefix"]=> string(0) "" ["localName"]=> string(2) "td" ["baseURI"]=> NULL ["textContent"]=> string(8) "May29Tue" }
//   //get all rows from the table  
// $rows = $tables->item(0)->getElementsByTagName('tr');   
// $row_count = 0;
//     $checkMonth = 0; 
//     $stop = 1;
//     $monthnames = array('jan','feb', 'mar', 'apr', 'may','jun','jul','aug','sep', 'oct', 'nov','dec');
// foreach ($rows as $row)   
// {   
//    // get each column by tag name  
//     if($stop>0){
//     $cols = $row->getElementsByTagName('td'); 
//     $row = array();
//     $i=0;
//     foreach ($cols as $node) {  
//         # code...
//         // print $node->nodeValue."\n";   
//         if($row_headers==NULL)
//             $row[] = $node->nodeValue;
//         else
//             $row[$row_headers[$i]] = $node->nodeValue;
//         $i++;
//     }  
//     $monthnames = array('jan','feb', 'mar', 'apr', 'may','jun','jul','aug','sep', 'oct', 'nov','dec');
//     $aDataTableDetailHTML = [];
//     for($j=0;$j<count($row);$j++){
//         // if($row[$j]!=null){
//             preg_match("/([a-zA-Z]+)(\\d+)([a-zA-Z]+)/", $row[$j], $matches);

//             if(count($matches)>2){
//                 $row_count=count($row);
//                 if(in_array(strtolower($matches[1]),$monthnames))
//                     $checkMonth = 1;
//                     $aDataTableDetailHTML[] = $matches[0];
//             }
//             else if($checkMonth>0)
//                     $aDataTableDetailHTML[] = $row[$j];
//         // }
//                 if(strtolower($row[$j])=="duty")
//                     $stop=0;
//     }

//     // echo json_encode($aDataTableDetailHTML);
//     $table[] = $aDataTableDetailHTML;
// }
// }   
// $ridx = 0;
// $cidx = 0;

// $out = array();
// $i=0;
// // echo ($i)." =>)) ".json_encode($row_count,JSON_FORCE_OBJECT)."<br><br>"; 
// foreach($table as  $row){
// // echo ($i)." =>)) ".json_encode($row,JSON_FORCE_OBJECT)."<br><br>"; 
//     foreach($row as  $val){
//         $out[$ridx][$cidx] = $val;
// // echo ($i)." =>)) ".json_encode($val,JSON_FORCE_OBJECT)."<br><br>";
// // echo ($i)." =>)) ".json_encode($out,JSON_FORCE_OBJECT)."<br><br>";
//         $ridx++;
//         if($ridx >= $row_count){
//             $cidx++;
//             $ridx = 0;
//         }
//     }
// // echo ($i++)." =>)) ".json_encode($out,JSON_FORCE_OBJECT)."<br><br>";
// }
// $i=0;
// $finalJSON = array();
// foreach ($out as $key) {
//     $data = [];
//     preg_match("/([a-zA-Z]+)(\\d+)([a-zA-Z]+)/", $key[0], $matches);
//     if(count($matches)>2){
//         if(in_array(strtolower($matches[1]),$monthnames)){
//             array_push($data,array("month"=>$matches[1],"date"=>$matches[2],"day"=>$matches[3]));
//         }
//     }

//     array_push($data,array("month"=>$key,"date"=>$key,"day"=>$key));
// // echo ($i++)." =>)) ".json_encode($key,JSON_FORCE_OBJECT)."<br><br>";
//     array_push($finalJSON, $data);
// }

// echo json_encode($finalJSON,JSON_FORCE_OBJECT)."<br><br>";   