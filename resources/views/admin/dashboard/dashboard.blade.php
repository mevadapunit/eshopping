@extends('layouts.app.admin-app')
@section('title', 'Dashboard - '.env('APP_NAME'))
@section('content')

<div class="app-content">
  <div class="side-app">


    <!-- PAGE-HEADER -->
    <div class="page-header">
      <div>
        <h1 class="page-title">Dashboard 01</h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
        </ol>
      </div>
      <div class="ms-auto pageheader-btn">
        <a href="#" class="btn btn-primary btn-icon text-white me-2">
          <span>
            <i class="fe fe-plus"></i>
          </span> Add Account
        </a>
        <a href="#" class="btn btn-success btn-icon text-white">
          <span>
            <i class="fe fe-log-in"></i>
          </span> Export
        </a>
      </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 -->
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
            <div class="card overflow-hidden">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h6 class="">Total Sales</h6>
                    <h3 class="mb-2 number-font">34,516</h3>
                    <p class="text-muted mb-0">
                      <span class="text-primary"><i class="fa fa-chevron-circle-up text-primary me-1"></i> 3%</span>
                      last month
                    </p>
                  </div>
                  <div class="col col-auto">
                    <div class="counter-icon bg-primary-gradient box-shadow-primary brround ms-auto">
                      <i class="fe fe-trending-up text-white mb-5 "></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
            <div class="card overflow-hidden">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h6 class="">Total Leads</h6>
                    <h3 class="mb-2 number-font">56,992</h3>
                    <p class="text-muted mb-0">
                      <span class="text-secondary"><i class="fa fa-chevron-circle-up text-secondary me-1"></i> 3%</span>
                      last month
                    </p>
                  </div>
                  <div class="col col-auto">
                    <div class="counter-icon bg-danger-gradient box-shadow-danger brround  ms-auto">
                      <i class="icon icon-rocket text-white mb-5 "></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
            <div class="card overflow-hidden">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h6 class="">Total Profit</h6>
                    <h3 class="mb-2 number-font">$42,567</h3>
                    <p class="text-muted mb-0">
                      <span class="text-success"><i class="fa fa-chevron-circle-down text-success me-1"></i> 0.5%</span>
                      last month
                    </p>
                  </div>
                  <div class="col col-auto">
                    <div class="counter-icon bg-secondary-gradient box-shadow-secondary brround ms-auto">
                      <i class="fe fe-dollar-sign text-white mb-5 "></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
            <div class="card overflow-hidden">
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h6 class="">Total Cost</h6>
                    <h3 class="mb-2 number-font">$34,789</h3>
                    <p class="text-muted mb-0">
                      <span class="text-danger"><i class="fa fa-chevron-circle-down text-danger me-1"></i> 0.2%</span>
                      last month
                    </p>
                  </div>
                  <div class="col col-auto">
                    <div class="counter-icon bg-success-gradient box-shadow-success brround  ms-auto">
                      <i class="fe fe-briefcase text-white mb-5 "></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Total Transactions</h3>
          </div>
          <div class="card-body pb-0">
            <div id="chartArea" class="chart-donut" style="min-height: 315px;">
              <div id="apexchartselpdn9j7h" class="apexcharts-canvas apexchartselpdn9j7h apexcharts-theme-light" style="width: 821px; height: 300px;"><svg id="SvgjsSvg1181" width="821" height="300" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                  <foreignObject x="0" y="0" width="821" height="300">
                    <div class="apexcharts-legend apexcharts-align-center position-top" xmlns="http://www.w3.org/1999/xhtml" style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 150px;">
                      <div class="apexcharts-legend-series" rel="1" seriesname="TotalxOrders" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(98, 89, 202) !important; color: rgb(98, 89, 202); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Total%20Orders" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Total Orders</span></div>
                      <div class="apexcharts-legend-series" rel="2" seriesname="TotalxSales" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(249, 148, 51) !important; color: rgb(249, 148, 51); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Total%20Sales" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Total Sales</span></div>
                      <div class="apexcharts-legend-series" rel="3" seriesname="" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="background: rgba(119, 119, 142, 0.05) !important; color: rgba(119, 119, 142, 0.05); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="3" i="2" data:default-text="" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;"></span></div>
                    </div>
                    <style type="text/css">
                      .apexcharts-legend {
                        display: flex;
                        overflow: auto;
                        padding: 0 10px;
                      }

                      .apexcharts-legend.position-bottom,
                      .apexcharts-legend.position-top {
                        flex-wrap: wrap
                      }

                      .apexcharts-legend.position-right,
                      .apexcharts-legend.position-left {
                        flex-direction: column;
                        bottom: 0;
                      }

                      .apexcharts-legend.position-bottom.apexcharts-align-left,
                      .apexcharts-legend.position-top.apexcharts-align-left,
                      .apexcharts-legend.position-right,
                      .apexcharts-legend.position-left {
                        justify-content: flex-start;
                      }

                      .apexcharts-legend.position-bottom.apexcharts-align-center,
                      .apexcharts-legend.position-top.apexcharts-align-center {
                        justify-content: center;
                      }

                      .apexcharts-legend.position-bottom.apexcharts-align-right,
                      .apexcharts-legend.position-top.apexcharts-align-right {
                        justify-content: flex-end;
                      }

                      .apexcharts-legend-series {
                        cursor: pointer;
                        line-height: normal;
                      }

                      .apexcharts-legend.position-bottom .apexcharts-legend-series,
                      .apexcharts-legend.position-top .apexcharts-legend-series {
                        display: flex;
                        align-items: center;
                      }

                      .apexcharts-legend-text {
                        position: relative;
                        font-size: 14px;
                      }

                      .apexcharts-legend-text *,
                      .apexcharts-legend-marker * {
                        pointer-events: none;
                      }

                      .apexcharts-legend-marker {
                        position: relative;
                        display: inline-block;
                        cursor: pointer;
                        margin-right: 3px;
                        border-style: solid;
                      }

                      .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                      .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                        display: inline-block;
                      }

                      .apexcharts-legend-series.apexcharts-no-click {
                        cursor: auto;
                      }

                      .apexcharts-legend .apexcharts-hidden-zero-series,
                      .apexcharts-legend .apexcharts-hidden-null-series {
                        display: none !important;
                      }

                      .apexcharts-inactive-legend {
                        opacity: 0.45;
                      }
                    </style>
                  </foreignObject>
                  <g id="SvgjsG1183" class="apexcharts-inner apexcharts-graphical" transform="translate(35.34765625, 48)">
                    <defs id="SvgjsDefs1182">
                      <clipPath id="gridRectMaskelpdn9j7h">
                        <rect id="SvgjsRect1189" width="780.482421875" height="217.348" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                      </clipPath>
                      <clipPath id="gridRectMarkerMaskelpdn9j7h">
                        <rect id="SvgjsRect1190" width="777.482421875" height="218.348" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                      </clipPath>
                      <filter id="SvgjsFilter1196" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                        <feFlood id="SvgjsFeFlood1197" flood-color="#000000" flood-opacity="0.1" result="SvgjsFeFlood1197Out" in="SourceGraphic"></feFlood>
                        <feComposite id="SvgjsFeComposite1198" in="SvgjsFeFlood1197Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1198Out"></feComposite>
                        <feOffset id="SvgjsFeOffset1199" dx="2" dy="2" result="SvgjsFeOffset1199Out" in="SvgjsFeComposite1198Out"></feOffset>
                        <feGaussianBlur id="SvgjsFeGaussianBlur1200" stdDeviation="4 " result="SvgjsFeGaussianBlur1200Out" in="SvgjsFeOffset1199Out"></feGaussianBlur>
                        <feMerge id="SvgjsFeMerge1201" result="SvgjsFeMerge1201Out" in="SourceGraphic">
                          <feMergeNode id="SvgjsFeMergeNode1202" in="SvgjsFeGaussianBlur1200Out"></feMergeNode>
                          <feMergeNode id="SvgjsFeMergeNode1203" in="[object Arguments]"></feMergeNode>
                        </feMerge>
                        <feBlend id="SvgjsFeBlend1204" in="SourceGraphic" in2="SvgjsFeMerge1201Out" mode="normal" result="SvgjsFeBlend1204Out"></feBlend>
                      </filter>
                      <filter id="SvgjsFilter1206" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                        <feFlood id="SvgjsFeFlood1207" flood-color="#000000" flood-opacity="0.1" result="SvgjsFeFlood1207Out" in="SourceGraphic"></feFlood>
                        <feComposite id="SvgjsFeComposite1208" in="SvgjsFeFlood1207Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1208Out"></feComposite>
                        <feOffset id="SvgjsFeOffset1209" dx="2" dy="2" result="SvgjsFeOffset1209Out" in="SvgjsFeComposite1208Out"></feOffset>
                        <feGaussianBlur id="SvgjsFeGaussianBlur1210" stdDeviation="4 " result="SvgjsFeGaussianBlur1210Out" in="SvgjsFeOffset1209Out"></feGaussianBlur>
                        <feMerge id="SvgjsFeMerge1211" result="SvgjsFeMerge1211Out" in="SourceGraphic">
                          <feMergeNode id="SvgjsFeMergeNode1212" in="SvgjsFeGaussianBlur1210Out"></feMergeNode>
                          <feMergeNode id="SvgjsFeMergeNode1213" in="[object Arguments]"></feMergeNode>
                        </feMerge>
                        <feBlend id="SvgjsFeBlend1214" in="SourceGraphic" in2="SvgjsFeMerge1211Out" mode="normal" result="SvgjsFeBlend1214Out"></feBlend>
                      </filter>
                      <filter id="SvgjsFilter1220" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                        <feFlood id="SvgjsFeFlood1221" flood-color="#000000" flood-opacity="0.1" result="SvgjsFeFlood1221Out" in="SourceGraphic"></feFlood>
                        <feComposite id="SvgjsFeComposite1222" in="SvgjsFeFlood1221Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1222Out"></feComposite>
                        <feOffset id="SvgjsFeOffset1223" dx="2" dy="2" result="SvgjsFeOffset1223Out" in="SvgjsFeComposite1222Out"></feOffset>
                        <feGaussianBlur id="SvgjsFeGaussianBlur1224" stdDeviation="4 " result="SvgjsFeGaussianBlur1224Out" in="SvgjsFeOffset1223Out"></feGaussianBlur>
                        <feMerge id="SvgjsFeMerge1225" result="SvgjsFeMerge1225Out" in="SourceGraphic">
                          <feMergeNode id="SvgjsFeMergeNode1226" in="SvgjsFeGaussianBlur1224Out"></feMergeNode>
                          <feMergeNode id="SvgjsFeMergeNode1227" in="[object Arguments]"></feMergeNode>
                        </feMerge>
                        <feBlend id="SvgjsFeBlend1228" in="SourceGraphic" in2="SvgjsFeMerge1225Out" mode="normal" result="SvgjsFeBlend1228Out"></feBlend>
                      </filter>
                      <filter id="SvgjsFilter1233" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                        <feFlood id="SvgjsFeFlood1234" flood-color="#000000" flood-opacity="0.1" result="SvgjsFeFlood1234Out" in="SourceGraphic"></feFlood>
                        <feComposite id="SvgjsFeComposite1235" in="SvgjsFeFlood1234Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1235Out"></feComposite>
                        <feOffset id="SvgjsFeOffset1236" dx="2" dy="2" result="SvgjsFeOffset1236Out" in="SvgjsFeComposite1235Out"></feOffset>
                        <feGaussianBlur id="SvgjsFeGaussianBlur1237" stdDeviation="4 " result="SvgjsFeGaussianBlur1237Out" in="SvgjsFeOffset1236Out"></feGaussianBlur>
                        <feMerge id="SvgjsFeMerge1238" result="SvgjsFeMerge1238Out" in="SourceGraphic">
                          <feMergeNode id="SvgjsFeMergeNode1239" in="SvgjsFeGaussianBlur1237Out"></feMergeNode>
                          <feMergeNode id="SvgjsFeMergeNode1240" in="[object Arguments]"></feMergeNode>
                        </feMerge>
                        <feBlend id="SvgjsFeBlend1241" in="SourceGraphic" in2="SvgjsFeMerge1238Out" mode="normal" result="SvgjsFeBlend1241Out"></feBlend>
                      </filter>
                    </defs>
                    <line id="SvgjsLine1188" x1="0" y1="0" x2="0" y2="214.348" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="214.348" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                    <g id="SvgjsG1242" class="apexcharts-xaxis" transform="translate(0, 0)">
                      <g id="SvgjsG1243" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1245" font-family="Helvetica, Arial, sans-serif" x="0" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan1246">Jan</tspan>
                          <title>Jan</title>
                        </text><text id="SvgjsText1248" font-family="Helvetica, Arial, sans-serif" x="70.31658380681819" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan1249">Feb</tspan>
                          <title>Feb</title>
                        </text><text id="SvgjsText1251" font-family="Helvetica, Arial, sans-serif" x="140.63316761363637" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan1252">Mar</tspan>
                          <title>Mar</title>
                        </text><text id="SvgjsText1254" font-family="Helvetica, Arial, sans-serif" x="210.94975142045456" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan1255">Apr</tspan>
                          <title>Apr</title>
                        </text><text id="SvgjsText1257" font-family="Helvetica, Arial, sans-serif" x="281.26633522727275" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan1258">May</tspan>
                          <title>May</title>
                        </text><text id="SvgjsText1260" font-family="Helvetica, Arial, sans-serif" x="351.582919034091" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan1261">Jun</tspan>
                          <title>Jun</title>
                        </text><text id="SvgjsText1263" font-family="Helvetica, Arial, sans-serif" x="421.8995028409091" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan1264">Jul</tspan>
                          <title>Jul</title>
                        </text><text id="SvgjsText1266" font-family="Helvetica, Arial, sans-serif" x="492.21608664772737" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan1267">Aug</tspan>
                          <title>Aug</title>
                        </text><text id="SvgjsText1269" font-family="Helvetica, Arial, sans-serif" x="562.5326704545456" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan1270">Sep</tspan>
                          <title>Sep</title>
                        </text><text id="SvgjsText1272" font-family="Helvetica, Arial, sans-serif" x="632.8492542613639" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan1273">Oct</tspan>
                          <title>Oct</title>
                        </text><text id="SvgjsText1275" font-family="Helvetica, Arial, sans-serif" x="703.1658380681821" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan1276">Nov</tspan>
                          <title>Nov</title>
                        </text><text id="SvgjsText1278" font-family="Helvetica, Arial, sans-serif" x="773.4824218750003" y="243.348" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                          <tspan id="SvgjsTspan1279">Dec</tspan>
                          <title>Dec</title>
                        </text></g>
                    </g>
                    <g id="SvgjsG1292" class="apexcharts-grid">
                      <g id="SvgjsG1293" class="apexcharts-gridlines-horizontal">
                        <line id="SvgjsLine1307" x1="0" y1="0" x2="773.482421875" y2="0" stroke="#e0e0e0" stroke-dasharray="3" class="apexcharts-gridline"></line>
                        <line id="SvgjsLine1308" x1="0" y1="53.587" x2="773.482421875" y2="53.587" stroke="#e0e0e0" stroke-dasharray="3" class="apexcharts-gridline"></line>
                        <line id="SvgjsLine1309" x1="0" y1="107.174" x2="773.482421875" y2="107.174" stroke="#e0e0e0" stroke-dasharray="3" class="apexcharts-gridline"></line>
                        <line id="SvgjsLine1310" x1="0" y1="160.76100000000002" x2="773.482421875" y2="160.76100000000002" stroke="#e0e0e0" stroke-dasharray="3" class="apexcharts-gridline"></line>
                        <line id="SvgjsLine1311" x1="0" y1="214.348" x2="773.482421875" y2="214.348" stroke="#e0e0e0" stroke-dasharray="3" class="apexcharts-gridline"></line>
                      </g>
                      <g id="SvgjsG1294" class="apexcharts-gridlines-vertical"></g>
                      <line id="SvgjsLine1295" x1="0" y1="215.348" x2="0" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                      <line id="SvgjsLine1296" x1="70.31658380681819" y1="215.348" x2="70.31658380681819" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                      <line id="SvgjsLine1297" x1="140.63316761363637" y1="215.348" x2="140.63316761363637" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                      <line id="SvgjsLine1298" x1="210.94975142045456" y1="215.348" x2="210.94975142045456" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                      <line id="SvgjsLine1299" x1="281.26633522727275" y1="215.348" x2="281.26633522727275" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                      <line id="SvgjsLine1300" x1="351.58291903409093" y1="215.348" x2="351.58291903409093" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                      <line id="SvgjsLine1301" x1="421.8995028409091" y1="215.348" x2="421.8995028409091" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                      <line id="SvgjsLine1302" x1="492.2160866477273" y1="215.348" x2="492.2160866477273" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                      <line id="SvgjsLine1303" x1="562.5326704545455" y1="215.348" x2="562.5326704545455" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                      <line id="SvgjsLine1304" x1="632.8492542613637" y1="215.348" x2="632.8492542613637" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                      <line id="SvgjsLine1305" x1="703.165838068182" y1="215.348" x2="703.165838068182" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                      <line id="SvgjsLine1306" x1="773.4824218750002" y1="215.348" x2="773.4824218750002" y2="221.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                      <line id="SvgjsLine1313" x1="0" y1="214.348" x2="773.482421875" y2="214.348" stroke="transparent" stroke-dasharray="0"></line>
                      <line id="SvgjsLine1312" x1="0" y1="1" x2="0" y2="214.348" stroke="transparent" stroke-dasharray="0"></line>
                    </g>
                    <g id="SvgjsG1191" class="apexcharts-area-series apexcharts-plot-series">
                      <g id="SvgjsG1192" class="apexcharts-series" seriesName="" data:longestSeries="true" rel="1" data:realIndex="2">
                        <path id="SvgjsPath1195" d="M 0 214.348L 0 214.348C 24.610804332386365 214.348 45.70577947443182 101.81530000000001 70.31658380681819 101.81530000000001C 94.92738813920455 101.81530000000001 116.02236328125001 139.32620000000003 140.63316761363637 139.32620000000003C 165.24397194602273 139.32620000000003 186.3389470880682 26.793499999999995 210.94975142045456 26.793499999999995C 235.5605557528409 26.793499999999995 256.6555308948864 123.2501 281.26633522727275 123.2501C 305.8771395596591 123.2501 326.9721147017046 49.300039999999996 351.58291903409093 49.300039999999996C 376.1937233664773 49.300039999999996 397.28869850852277 117.8914 421.8995028409091 117.8914C 446.5103071732955 117.8914 467.60528231534096 16.076099999999997 492.2160866477273 16.076099999999997C 516.8268909801137 16.076099999999997 537.9218661221591 85.73920000000001 562.5326704545455 85.73920000000001C 587.1434747869318 85.73920000000001 608.2384499289773 58.945700000000016 632.8492542613636 58.945700000000016C 657.46005859375 58.945700000000016 678.5550337357955 16.076099999999997 703.1658380681819 16.076099999999997C 727.7766424005682 16.076099999999997 748.8716175426136 75.02180000000001 773.482421875 75.02180000000001C 773.482421875 75.02180000000001 773.482421875 75.02180000000001 773.482421875 214.348M 773.482421875 75.02180000000001z" fill="rgba(119, 119, 142, 0.05)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="2" clip-path="url(#gridRectMaskelpdn9j7h)" filter="url(#SvgjsFilter1196)" pathTo="M 0 214.348L 0 214.348C 24.610804332386365 214.348 45.70577947443182 101.81530000000001 70.31658380681819 101.81530000000001C 94.92738813920455 101.81530000000001 116.02236328125001 139.32620000000003 140.63316761363637 139.32620000000003C 165.24397194602273 139.32620000000003 186.3389470880682 26.793499999999995 210.94975142045456 26.793499999999995C 235.5605557528409 26.793499999999995 256.6555308948864 123.2501 281.26633522727275 123.2501C 305.8771395596591 123.2501 326.9721147017046 49.300039999999996 351.58291903409093 49.300039999999996C 376.1937233664773 49.300039999999996 397.28869850852277 117.8914 421.8995028409091 117.8914C 446.5103071732955 117.8914 467.60528231534096 16.076099999999997 492.2160866477273 16.076099999999997C 516.8268909801137 16.076099999999997 537.9218661221591 85.73920000000001 562.5326704545455 85.73920000000001C 587.1434747869318 85.73920000000001 608.2384499289773 58.945700000000016 632.8492542613636 58.945700000000016C 657.46005859375 58.945700000000016 678.5550337357955 16.076099999999997 703.1658380681819 16.076099999999997C 727.7766424005682 16.076099999999997 748.8716175426136 75.02180000000001 773.482421875 75.02180000000001C 773.482421875 75.02180000000001 773.482421875 75.02180000000001 773.482421875 214.348M 773.482421875 75.02180000000001z" pathFrom="M -1 214.348L -1 214.348L 70.31658380681819 214.348L 140.63316761363637 214.348L 210.94975142045456 214.348L 281.26633522727275 214.348L 351.58291903409093 214.348L 421.8995028409091 214.348L 492.2160866477273 214.348L 562.5326704545455 214.348L 632.8492542613636 214.348L 703.1658380681819 214.348L 773.482421875 214.348"></path>
                        <path id="SvgjsPath1205" d="M 0 214.348C 24.610804332386365 214.348 45.70577947443182 101.81530000000001 70.31658380681819 101.81530000000001C 94.92738813920455 101.81530000000001 116.02236328125001 139.32620000000003 140.63316761363637 139.32620000000003C 165.24397194602273 139.32620000000003 186.3389470880682 26.793499999999995 210.94975142045456 26.793499999999995C 235.5605557528409 26.793499999999995 256.6555308948864 123.2501 281.26633522727275 123.2501C 305.8771395596591 123.2501 326.9721147017046 49.300039999999996 351.58291903409093 49.300039999999996C 376.1937233664773 49.300039999999996 397.28869850852277 117.8914 421.8995028409091 117.8914C 446.5103071732955 117.8914 467.60528231534096 16.076099999999997 492.2160866477273 16.076099999999997C 516.8268909801137 16.076099999999997 537.9218661221591 85.73920000000001 562.5326704545455 85.73920000000001C 587.1434747869318 85.73920000000001 608.2384499289773 58.945700000000016 632.8492542613636 58.945700000000016C 657.46005859375 58.945700000000016 678.5550337357955 16.076099999999997 703.1658380681819 16.076099999999997C 727.7766424005682 16.076099999999997 748.8716175426136 75.02180000000001 773.482421875 75.02180000000001" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="2" clip-path="url(#gridRectMaskelpdn9j7h)" filter="url(#SvgjsFilter1206)" pathTo="M 0 214.348C 24.610804332386365 214.348 45.70577947443182 101.81530000000001 70.31658380681819 101.81530000000001C 94.92738813920455 101.81530000000001 116.02236328125001 139.32620000000003 140.63316761363637 139.32620000000003C 165.24397194602273 139.32620000000003 186.3389470880682 26.793499999999995 210.94975142045456 26.793499999999995C 235.5605557528409 26.793499999999995 256.6555308948864 123.2501 281.26633522727275 123.2501C 305.8771395596591 123.2501 326.9721147017046 49.300039999999996 351.58291903409093 49.300039999999996C 376.1937233664773 49.300039999999996 397.28869850852277 117.8914 421.8995028409091 117.8914C 446.5103071732955 117.8914 467.60528231534096 16.076099999999997 492.2160866477273 16.076099999999997C 516.8268909801137 16.076099999999997 537.9218661221591 85.73920000000001 562.5326704545455 85.73920000000001C 587.1434747869318 85.73920000000001 608.2384499289773 58.945700000000016 632.8492542613636 58.945700000000016C 657.46005859375 58.945700000000016 678.5550337357955 16.076099999999997 703.1658380681819 16.076099999999997C 727.7766424005682 16.076099999999997 748.8716175426136 75.02180000000001 773.482421875 75.02180000000001" pathFrom="M -1 214.348L -1 214.348L 70.31658380681819 214.348L 140.63316761363637 214.348L 210.94975142045456 214.348L 281.26633522727275 214.348L 351.58291903409093 214.348L 421.8995028409091 214.348L 492.2160866477273 214.348L 562.5326704545455 214.348L 632.8492542613636 214.348L 703.1658380681819 214.348L 773.482421875 214.348"></path>
                        <g id="SvgjsG1193" class="apexcharts-series-markers-wrap" data:realIndex="2">
                          <g class="apexcharts-series-markers">
                            <circle id="SvgjsCircle1319" r="0" cx="0" cy="0" class="apexcharts-marker wxlnt09ky" stroke="#ffffff" fill="#6259ca" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                          </g>
                        </g>
                      </g>
                    </g>
                    <g id="SvgjsG1215" class="apexcharts-line-series apexcharts-plot-series">
                      <g id="SvgjsG1216" class="apexcharts-series" seriesName="TotalxOrders" data:longestSeries="true" rel="1" data:realIndex="0">
                        <path id="SvgjsPath1219" d="M 0 214.348C 24.610804332386365 214.348 45.70577947443182 166.11970000000002 70.31658380681819 166.11970000000002C 94.92738813920455 166.11970000000002 116.02236328125001 182.19580000000002 140.63316761363637 182.19580000000002C 165.24397194602273 182.19580000000002 186.3389470880682 133.9675 210.94975142045456 133.9675C 235.5605557528409 133.9675 256.6555308948864 198.27190000000002 281.26633522727275 198.27190000000002C 305.8771395596591 198.27190000000002 326.9721147017046 113.60444000000001 351.58291903409093 113.60444000000001C 376.1937233664773 113.60444000000001 397.28869850852277 171.47840000000002 421.8995028409091 171.47840000000002C 446.5103071732955 171.47840000000002 467.60528231534096 91.09790000000001 492.2160866477273 91.09790000000001C 516.8268909801137 91.09790000000001 537.9218661221591 182.19580000000002 562.5326704545455 182.19580000000002C 587.1434747869318 182.19580000000002 608.2384499289773 101.81530000000001 632.8492542613636 101.81530000000001C 657.46005859375 101.81530000000001 678.5550337357955 144.68490000000003 703.1658380681819 144.68490000000003C 727.7766424005682 144.68490000000003 748.8716175426136 96.45660000000001 773.482421875 96.45660000000001" fill="none" fill-opacity="1" stroke="rgba(98,89,202,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskelpdn9j7h)" filter="url(#SvgjsFilter1220)" pathTo="M 0 214.348C 24.610804332386365 214.348 45.70577947443182 166.11970000000002 70.31658380681819 166.11970000000002C 94.92738813920455 166.11970000000002 116.02236328125001 182.19580000000002 140.63316761363637 182.19580000000002C 165.24397194602273 182.19580000000002 186.3389470880682 133.9675 210.94975142045456 133.9675C 235.5605557528409 133.9675 256.6555308948864 198.27190000000002 281.26633522727275 198.27190000000002C 305.8771395596591 198.27190000000002 326.9721147017046 113.60444000000001 351.58291903409093 113.60444000000001C 376.1937233664773 113.60444000000001 397.28869850852277 171.47840000000002 421.8995028409091 171.47840000000002C 446.5103071732955 171.47840000000002 467.60528231534096 91.09790000000001 492.2160866477273 91.09790000000001C 516.8268909801137 91.09790000000001 537.9218661221591 182.19580000000002 562.5326704545455 182.19580000000002C 587.1434747869318 182.19580000000002 608.2384499289773 101.81530000000001 632.8492542613636 101.81530000000001C 657.46005859375 101.81530000000001 678.5550337357955 144.68490000000003 703.1658380681819 144.68490000000003C 727.7766424005682 144.68490000000003 748.8716175426136 96.45660000000001 773.482421875 96.45660000000001" pathFrom="M -1 214.348L -1 214.348L 70.31658380681819 214.348L 140.63316761363637 214.348L 210.94975142045456 214.348L 281.26633522727275 214.348L 351.58291903409093 214.348L 421.8995028409091 214.348L 492.2160866477273 214.348L 562.5326704545455 214.348L 632.8492542613636 214.348L 703.1658380681819 214.348L 773.482421875 214.348"></path>
                        <g id="SvgjsG1217" class="apexcharts-series-markers-wrap" data:realIndex="0">
                          <g class="apexcharts-series-markers">
                            <circle id="SvgjsCircle1320" r="0" cx="0" cy="0" class="apexcharts-marker wb6b32woc" stroke="#ffffff" fill="#f99433" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                          </g>
                        </g>
                      </g>
                      <g id="SvgjsG1229" class="apexcharts-series" seriesName="TotalxSales" data:longestSeries="true" rel="2" data:realIndex="1">
                        <path id="SvgjsPath1232" d="M 0 214.348C 24.610804332386365 214.348 45.70577947443182 150.04360000000003 70.31658380681819 150.04360000000003C 94.92738813920455 150.04360000000003 116.02236328125001 192.91320000000002 140.63316761363637 192.91320000000002C 165.24397194602273 192.91320000000002 186.3389470880682 75.02180000000001 210.94975142045456 75.02180000000001C 235.5605557528409 75.02180000000001 256.6555308948864 133.9675 281.26633522727275 133.9675C 305.8771395596591 133.9675 326.9721147017046 75.02180000000001 351.58291903409093 75.02180000000001C 376.1937233664773 75.02180000000001 397.28869850852277 133.9675 421.8995028409091 133.9675C 446.5103071732955 133.9675 467.60528231534096 64.30440000000002 492.2160866477273 64.30440000000002C 516.8268909801137 64.30440000000002 537.9218661221591 145.75664 562.5326704545455 145.75664C 587.1434747869318 145.75664 608.2384499289773 75.02180000000001 632.8492542613636 75.02180000000001C 657.46005859375 75.02180000000001 678.5550337357955 123.2501 703.1658380681819 123.2501C 727.7766424005682 123.2501 748.8716175426136 85.73920000000001 773.482421875 85.73920000000001" fill="none" fill-opacity="1" stroke="rgba(249,148,51,0.85)" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="4" class="apexcharts-line" index="1" clip-path="url(#gridRectMaskelpdn9j7h)" filter="url(#SvgjsFilter1233)" pathTo="M 0 214.348C 24.610804332386365 214.348 45.70577947443182 150.04360000000003 70.31658380681819 150.04360000000003C 94.92738813920455 150.04360000000003 116.02236328125001 192.91320000000002 140.63316761363637 192.91320000000002C 165.24397194602273 192.91320000000002 186.3389470880682 75.02180000000001 210.94975142045456 75.02180000000001C 235.5605557528409 75.02180000000001 256.6555308948864 133.9675 281.26633522727275 133.9675C 305.8771395596591 133.9675 326.9721147017046 75.02180000000001 351.58291903409093 75.02180000000001C 376.1937233664773 75.02180000000001 397.28869850852277 133.9675 421.8995028409091 133.9675C 446.5103071732955 133.9675 467.60528231534096 64.30440000000002 492.2160866477273 64.30440000000002C 516.8268909801137 64.30440000000002 537.9218661221591 145.75664 562.5326704545455 145.75664C 587.1434747869318 145.75664 608.2384499289773 75.02180000000001 632.8492542613636 75.02180000000001C 657.46005859375 75.02180000000001 678.5550337357955 123.2501 703.1658380681819 123.2501C 727.7766424005682 123.2501 748.8716175426136 85.73920000000001 773.482421875 85.73920000000001" pathFrom="M -1 214.348L -1 214.348L 70.31658380681819 214.348L 140.63316761363637 214.348L 210.94975142045456 214.348L 281.26633522727275 214.348L 351.58291903409093 214.348L 421.8995028409091 214.348L 492.2160866477273 214.348L 562.5326704545455 214.348L 632.8492542613636 214.348L 703.1658380681819 214.348L 773.482421875 214.348"></path>
                        <g id="SvgjsG1230" class="apexcharts-series-markers-wrap" data:realIndex="1">
                          <g class="apexcharts-series-markers">
                            <circle id="SvgjsCircle1321" r="0" cx="0" cy="0" class="apexcharts-marker wok0d1sgw" stroke="#ffffff" fill="rgba(119, 119, 142, 0.05)" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                          </g>
                        </g>
                      </g>
                      <g id="SvgjsG1194" class="apexcharts-datalabels" data:realIndex="2"></g>
                      <g id="SvgjsG1218" class="apexcharts-datalabels" data:realIndex="0"></g>
                      <g id="SvgjsG1231" class="apexcharts-datalabels" data:realIndex="1"></g>
                    </g>
                    <line id="SvgjsLine1314" x1="0" y1="0" x2="773.482421875" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                    <line id="SvgjsLine1315" x1="0" y1="0" x2="773.482421875" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                    <g id="SvgjsG1316" class="apexcharts-yaxis-annotations"></g>
                    <g id="SvgjsG1317" class="apexcharts-xaxis-annotations"></g>
                    <g id="SvgjsG1318" class="apexcharts-point-annotations"></g>
                    <rect id="SvgjsRect1322" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect>
                    <rect id="SvgjsRect1323" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect>
                  </g>
                  <rect id="SvgjsRect1187" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                  <g id="SvgjsG1280" class="apexcharts-yaxis" rel="0" transform="translate(17.34765625, 0)">
                    <g id="SvgjsG1281" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1282" font-family="Helvetica, Arial, sans-serif" x="20" y="49.4" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                        <tspan id="SvgjsTspan1283">200</tspan>
                      </text><text id="SvgjsText1284" font-family="Helvetica, Arial, sans-serif" x="20" y="102.98700000000001" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                        <tspan id="SvgjsTspan1285">150</tspan>
                      </text><text id="SvgjsText1286" font-family="Helvetica, Arial, sans-serif" x="20" y="156.574" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                        <tspan id="SvgjsTspan1287">100</tspan>
                      </text><text id="SvgjsText1288" font-family="Helvetica, Arial, sans-serif" x="20" y="210.16100000000003" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                        <tspan id="SvgjsTspan1289">50</tspan>
                      </text><text id="SvgjsText1290" font-family="Helvetica, Arial, sans-serif" x="20" y="263.748" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                        <tspan id="SvgjsTspan1291">0</tspan>
                      </text></g>
                  </g>
                  <g id="SvgjsG1184" class="apexcharts-annotations"></g>
                </svg>
                <div class="apexcharts-tooltip apexcharts-theme-light">
                  <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                  <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(98, 89, 202);"></span>
                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                      <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                      <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                    </div>
                  </div>
                  <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(249, 148, 51);"></span>
                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                      <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                      <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                    </div>
                  </div>
                  <div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgba(119, 119, 142, 0.05);"></span>
                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                      <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                      <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                    </div>
                  </div>
                </div>
                <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                  <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                </div>
                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                  <div class="apexcharts-yaxistooltip-text"></div>
                </div>
                <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                  <div class="apexcharts-zoomin-icon" title="Zoom In"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <path d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                    </svg>
                  </div>
                  <div class="apexcharts-zoomout-icon" title="Zoom Out"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <path d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                    </svg>
                  </div>
                  <div class="apexcharts-zoom-icon apexcharts-selected" title="Selection Zoom"><svg xmlns="http://www.w3.org/2000/svg" fill="#000000" height="24" viewBox="0 0 24 24" width="24">
                      <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                      <path d="M0 0h24v24H0V0z" fill="none"></path>
                      <path d="M12 10h-2v2H9v-2H7V9h2V7h1v2h2v1z"></path>
                    </svg></div>
                  <div class="apexcharts-pan-icon" title="Panning"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" height="24" viewBox="0 0 24 24" width="24">
                      <defs>
                        <path d="M0 0h24v24H0z" id="a"></path>
                      </defs>
                      <clipPath id="b">
                        <use overflow="visible" xlink:href="#a"></use>
                      </clipPath>
                      <path clip-path="url(#b)" d="M23 5.5V20c0 2.2-1.8 4-4 4h-7.3c-1.08 0-2.1-.43-2.85-1.19L1 14.83s1.26-1.23 1.3-1.25c.22-.19.49-.29.79-.29.22 0 .42.06.6.16.04.01 4.31 2.46 4.31 2.46V4c0-.83.67-1.5 1.5-1.5S11 3.17 11 4v7h1V1.5c0-.83.67-1.5 1.5-1.5S15 .67 15 1.5V11h1V2.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5V11h1V5.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5z"></path>
                    </svg></div>
                  <div class="apexcharts-reset-icon" title="Reset Zoom"><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path>
                      <path d="M0 0h24v24H0z" fill="none"></path>
                    </svg></div>
                  <div class="apexcharts-menu-icon" title="Menu"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <path fill="none" d="M0 0h24v24H0V0z"></path>
                      <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                    </svg></div>
                  <div class="apexcharts-menu">
                    <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div>
                    <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div>
                    <div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="resize-triggers">
              <div class="expand-trigger">
                <div style="width: 872px; height: 362px;"></div>
              </div>
              <div class="contract-trigger"></div>
            </div>
          </div>
        </div>
      </div><!-- COL END -->
      <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
        <div class="card custom-card ">
          <div class="card-header">
            <h3 class="card-title">Recent Orders</h3>
          </div>
          <div class="card-body pt-0">
            <div id="recentorders" class="apex-charts ht-150" style="min-height: 231.9px;">
              <div id="apexchartspahntfc3" class="apexcharts-canvas apexchartspahntfc3 apexcharts-theme-light" style="width: 224px; height: 231.9px;"><svg id="SvgjsSvg1324" width="224" height="231.9" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 10)" style="background: transparent;">
                  <g id="SvgjsG1326" class="apexcharts-inner apexcharts-graphical" transform="translate(-27.5, 0)">
                    <defs id="SvgjsDefs1325">
                      <clipPath id="gridRectMaskpahntfc3">
                        <rect id="SvgjsRect1328" width="287" height="305" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                      </clipPath>
                      <clipPath id="gridRectMarkerMaskpahntfc3">
                        <rect id="SvgjsRect1329" width="285" height="307" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                      </clipPath>
                      <linearGradient id="SvgjsLinearGradient1334" x1="0" y1="1" x2="1" y2="1">
                        <stop id="SvgjsStop1335" stop-opacity="1" stop-color="rgba(98,89,202,1)" offset="0"></stop>
                        <stop id="SvgjsStop1336" stop-opacity="1" stop-color="rgba(242,242,242,1)" offset="1"></stop>
                        <stop id="SvgjsStop1337" stop-opacity="1" stop-color="rgba(242,242,242,1)" offset="1"></stop>
                      </linearGradient>
                      <linearGradient id="SvgjsLinearGradient1345" x1="0" y1="1" x2="1" y2="1">
                        <stop id="SvgjsStop1346" stop-opacity="1" stop-color="rgba(98,89,202,1)" offset="0"></stop>
                        <stop id="SvgjsStop1347" stop-opacity="1" stop-color="rgba(255,93,158,1)" offset="1"></stop>
                        <stop id="SvgjsStop1348" stop-opacity="1" stop-color="rgba(255,93,158,1)" offset="1"></stop>
                      </linearGradient>
                    </defs>
                    <g id="SvgjsG1330" class="apexcharts-radialbar">
                      <g id="SvgjsG1331">
                        <g id="SvgjsG1332" class="apexcharts-tracks">
                          <g id="SvgjsG1333" class="apexcharts-radialbar-track apexcharts-track" rel="1">
                            <path id="apexcharts-radialbarTrack-0" d="M 80.80552813702589 200.1944718629741 A 84.42073170731709 84.42073170731709 0 1 1 200.1944718629741 200.1944718629741" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="22.214634146341467" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 80.80552813702589 200.1944718629741 A 84.42073170731709 84.42073170731709 0 1 1 200.1944718629741 200.1944718629741"></path>
                          </g>
                        </g>
                        <g id="SvgjsG1339">
                          <g id="SvgjsG1344" class="apexcharts-series apexcharts-radial-series" seriesName="" rel="1" data:realIndex="0">
                            <path id="SvgjsPath1349" d="M 80.80552813702589 200.1944718629741 A 84.42073170731709 84.42073170731709 0 1 1 224.9078740209771 139.02665507851103" fill="none" fill-opacity="0.85" stroke="url(#SvgjsLinearGradient1345)" stroke-opacity="1" stroke-linecap="butt" stroke-width="27.768292682926834" stroke-dasharray="4" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="224" data:value="83" index="0" j="0" data:pathOrig="M 80.80552813702589 200.1944718629741 A 84.42073170731709 84.42073170731709 0 1 1 224.9078740209771 139.02665507851103"></path>
                          </g>
                          <circle id="SvgjsCircle1340" r="68.31341463414635" cx="140.5" cy="140.5" class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                          <g id="SvgjsG1341" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1342" font-family="Helvetica, Arial, sans-serif" x="140.5" y="170.5" text-anchor="middle" dominant-baseline="auto" font-size="16px" font-weight="400" fill="#ff5d9e" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;"></text><text id="SvgjsText1343" font-family="Helvetica, Arial, sans-serif" x="140.5" y="146.5" text-anchor="middle" dominant-baseline="auto" font-size="22px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">83%</text></g>
                        </g>
                      </g>
                    </g>
                    <line id="SvgjsLine1350" x1="0" y1="0" x2="281" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                    <line id="SvgjsLine1351" x1="0" y1="0" x2="281" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                  </g>
                  <g id="SvgjsG1327" class="apexcharts-annotations"></g>
                </svg>
                <div class="apexcharts-legend"></div>
              </div>
            </div>
            <div class="row sales-product-infomation pb-0 mb-0 mx-auto wd-100p mt-6">
              <div class="col-md-6 col justify-content-center text-center">
                <p class="mb-0 d-flex justify-content-center"><span class="legend bg-primary"></span>Delivered</p>
                <h3 class="mb-1 fw-bold">5238</h3>
                <div class="d-flex justify-content-center ">
                  <p class="text-muted mb-0">Last 6 months</p>
                </div>
              </div>
              <div class="col-md-6 col text-center float-end">
                <p class="mb-0 d-flex justify-content-center "><span class="legend bg-background2"></span>Cancelled</p>
                <h3 class="mb-1 fw-bold">3467</h3>
                <div class="d-flex justify-content-center ">
                  <p class="text-muted mb-0">Last 6 months</p>
                </div>
              </div>
            </div>
            <div class="resize-triggers">
              <div class="expand-trigger">
                <div style="width: 275px; height: 383px;"></div>
              </div>
              <div class="contract-trigger"></div>
            </div>
          </div>
        </div>
      </div><!-- COL END -->
    </div>
    <!-- ROW-1 END -->

    <!-- ROW-3 -->
    <div class="row">
      <div class="col-xl-4 col-md-12">
        <div class="card overflow-hidden">
          <div class="card-header">
            <div>
              <h3 class="card-title">Timeline</h3>
            </div>
          </div>
          <div class="card-body pb-0 pt-4">
            <div class="activity1">
              <div class="activity-blog">
                <div class="activity-img brround bg-primary-transparent text-primary">
                  <i class="fa fa-user-plus fs-20"></i>
                </div>
                <div class="activity-details d-flex">
                  <div><b><span class="text-dark"> Mr John </span> </b> Started following you <span class="d-flex text-muted fs-11">01 June 2020</span></div>
                  <div class="ms-auto fs-13 text-dark fw-semibold"><span class="badge bg-primary text-white">1m</span></div>
                </div>
              </div>
              <div class="activity-blog">
                <div class="activity-img brround bg-secondary-transparent text-secondary">
                  <i class="fa fa-comment fs-20"></i>
                </div>
                <div class="activity-details d-flex">
                  <div><b><span class="text-dark"> Lily </span> </b> 1 Commented applied <span class="d-flex text-muted fs-11">01 July 2020</span> </div>
                  <div class="ms-auto fs-13 text-dark fw-semibold"><span class="badge bg-danger text-white">3m</span></div>
                </div>
              </div>
              <div class="activity-blog">
                <div class="activity-img brround bg-success-transparent text-success">
                  <i class="fa fa-thumbs-up fs-20"></i>
                </div>
                <div class="activity-details d-flex">
                  <div><b><span class="text-dark"> Kevin </span> </b> liked your site <span class="d-flex text-muted fs-11">05 July 2020</span></div>
                  <div class="ms-auto fs-13 text-dark fw-semibold"><span class="badge bg-warning text-white">5m</span></div>
                </div>
              </div>
              <div class="activity-blog">
                <div class="activity-img brround bg-info-transparent text-info">
                  <i class="fa fa-envelope fs-20"></i>
                </div>
                <div class="activity-details d-flex">
                  <div><b><span class="text-dark"> Andrena </span> </b> posted a new article <span class="d-flex text-muted fs-11">09 October 2020</span></div>
                  <div class="ms-auto fs-13 text-dark fw-semibold"><span class="badge bg-info text-white">5m</span></div>
                </div>
              </div>
              <div class="activity-blog">
                <div class="activity-img brround bg-danger-transparent text-danger">
                  <i class="fa fa-shopping-bag fs-20"></i>
                </div>
                <div class="activity-details d-flex">
                  <div><b><span class="text-dark"> Sonia </span> </b> Delivery in progress <span class="d-flex text-muted fs-11">12 October 2020</span></div>
                  <div class="ms-auto fs-13 text-dark fw-semibold"><span class="badge bg-warning text-white">5m</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title fw-semibold ">Browser Usage</h4>
          </div>
          <div class="card-body pt-2 pb-2">
            <div class="d-md-flex align-items-center browser-stats">
              <div class="d-flex">
                <i class="fa fa-chrome bg-secondary-gradient text-white me-2"></i>
                <p class="fs-16 my-auto mb-0">Chrome</p>
              </div>
              <div class="ms-auto my-auto">
                <div class="d-flex">
                  <span class="me-4 my-auto fs-16">35,502</span>
                  <span class="text-success fs-15"><i class="fe fe-arrow-up"></i>12.75%</span>
                </div>
              </div>
            </div>
            <div class="d-md-flex align-items-center browser-stats">
              <div class="d-flex">
                <i class="fa fa-opera text-white bg-danger-gradient me-2"></i>
                <p class="fs-16 my-auto mb-0">Opera</p>
              </div>
              <div class="ms-auto my-auto">
                <div class="d-flex">
                  <span class="me-4 my-auto fs-16">12,563</span>
                  <span class="text-danger fs-15"><i class="fe fe-arrow-down"></i>15.12%</span>
                </div>
              </div>
            </div>
            <div class="d-md-flex align-items-center browser-stats">
              <div class="d-flex">
                <i class="fa fa-firefox text-white bg-purple-gradient me-2"></i>
                <p class="fs-16 my-auto mb-0">IE</p>
              </div>
              <div class="ms-auto my-auto">
                <div class="d-flex">
                  <span class="me-4 my-auto fs-16">25,364</span>
                  <span class="text-success fs-15"><i class="fe fe-arrow-up"></i>24.37%</span>
                </div>
              </div>
            </div>
            <div class="d-md-flex align-items-center browser-stats">
              <div class="d-flex">
                <i class="fa fa-edge text-white bg-info-gradient me-2"></i>
                <p class="fs-16 my-auto mb-0">Firefox</p>
              </div>
              <div class="ms-auto my-auto">
                <div class="d-flex">
                  <span class="me-4 my-auto fs-16">14,635</span>
                  <span class="text-success fs-15"><i class="fe fe-arrow-up"></i>15,63%</span>
                </div>
              </div>
            </div>
            <div class="d-md-flex align-items-center browser-stats">
              <div class="d-flex">
                <i class="fa fa-android text-white bg-success-gradient me-2"></i>
                <p class="fs-16 my-auto mb-0">Android</p>
              </div>
              <div class="ms-auto my-auto">
                <div class="d-flex">
                  <span class="me-4 my-auto fs-16">15,453</span>
                  <span class="text-danger fs-15"><i class="fe fe-arrow-down"></i>23.70%</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title fw-semibold ">Daily Activity</h4>
          </div>
          <div class="card-body pb-0">
            <ul class="task-list">
              <li>
                <i class="task-icon bg-primary"></i>
                <h6>Task Finished<span class="text-muted fs-11 ms-2">29 Oct 2020</span></h6>
                <p class="text-muted fs-12">Adam Berry finished task on<a href="#" class="fw-semibold"> Project Management</a></p>
              </li>
              <li>
                <i class="task-icon bg-secondary"></i>
                <h6>New Comment<span class="text-muted fs-11 ms-2">25 Oct 2020</span></h6>
                <p class="text-muted fs-12">Victoria commented on Project <a href="#" class="fw-semibold"> AngularJS Template</a></p>
              </li>
              <li>
                <i class="task-icon bg-primary"></i>
                <h6>New Comment<span class="text-muted fs-11 ms-2">25 Oct 2020</span></h6>
                <p class="text-muted fs-12">Victoria commented on Project <a href="#" class="fw-semibold"> AngularJS Template</a></p>
              </li>
              <li>
                <i class="task-icon bg-secondary"></i>
                <h6>Task Overdue<span class="text-muted fs-11 ms-2">14 Oct 2020</span></h6>
                <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a href="#" class="fw-semibold"> Integrated management</a></p>
              </li>
              <li>
                <i class="task-icon bg-primary"></i>
                <h6>Task Overdue<span class="text-muted fs-11 ms-2">29 Oct 2020</span></h6>
                <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a href="#" class="fw-semibold"> Integrated management</a></p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div><!-- COL END -->
    <!-- ROW-3 END -->

    <!-- ROW-5 -->
    <div class="row">
      <div class="col-12 col-sm-12">
        <div class="card ">
          <div class="card-header">
            <h3 class="card-title mb-0">Product Sales</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <div id="data-table_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="data-table_length"><label>Show <select name="data-table_length" aria-controls="data-table" class="form-select form-select-sm select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                          <option value="10">10</option>
                          <option value="25">25</option>
                          <option value="50">50</option>
                          <option value="100">100</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 60px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-data-table_length-0y-container"><span class="select2-selection__rendered" id="select2-data-table_length-0y-container" title="10">10</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> entries</label></div>
                  </div>
                  <div class="col-sm-12 col-md-6">
                    <div id="data-table_filter" class="dataTables_filter"><label><input type="search" class="form-control form-control-sm" placeholder="Search..." aria-controls="data-table"></label></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <table id="data-table" class="table table-bordered text-nowrap mb-0 dataTable no-footer" role="grid" aria-describedby="data-table_info">
                      <thead class="border-top">
                        <tr role="row">
                          <th class="bg-transparent border-bottom-0 w-5 sorting sorting_asc" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="S.no: activate to sort column descending" style="width: 31.9688px;">S.no</th>
                          <th class="bg-transparent border-bottom-0 sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 315.203px;">Name</th>
                          <th class="bg-transparent border-bottom-0 sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 127.109px;">Date</th>
                          <th class="bg-transparent border-bottom-0 sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 124.734px;">Amount</th>
                          <th class="bg-transparent border-bottom-0 sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 111.688px;">Status</th>
                          <th class="bg-transparent border-bottom-0 sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 149.297px;">Action</th>
                        </tr>
                      </thead>
                      <tbody>








                        <tr class="border-bottom odd">
                          <td class="text-muted fs-15 fw-semibold text-center sorting_1">01.</td>
                          <td>
                            <div class="d-flex">
                              <span class="avatar avatar-md brround mt-1" style="background-image: url({{asset('admin/assets/images/users/11.jpg')}})"></span>
                              <div class="ms-2 mt-0 mt-sm-2 d-block">
                                <h6 class="mb-0 fs-14 fw-semibold">Jake poole</h6>
                                <span class="fs-12 text-muted">jacke123@gmail.com</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-muted fs-15 fw-semibold">20-11-2020 </td>
                          <td class="text-muted fs-15 fw-semibold">$5.321.2</td>
                          <td class="text-success fs-15 fw-semibold">Success</td>
                          <td class="">
                            <a class="btn btn-primary btn-sm rounded-11 me-2" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i><svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                  <path d="M0 0h24v24H0V0z" fill="none"></path>
                                  <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path>
                                </svg></i></a>
                            <a class="btn btn-danger btn-sm rounded-11" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i><svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                  <path d="M0 0h24v24H0V0z" fill="none"></path>
                                  <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path>
                                </svg></i></a>
                          </td>
                        </tr>
                        <tr class="border-bottom even">
                          <td class="text-muted fs-15 fw-semibold text-center sorting_1">02.</td>
                          <td>
                            <div class="d-flex">
                              <span class="avatar avatar-md brround mt-1" style="background-image: url({{asset('admin/assets/images/users/1.jpg')}})"></span>
                              <div class="ms-2 mt-0 mt-sm-2 d-block">
                                <h6 class="mb-0 fs-14 fw-semibold">Virginia Gray</h6>
                                <span class="fs-12 text-muted">virginia456@gmail.com</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-muted fs-15 fw-semibold">20-11-2020 </td>
                          <td class="text-muted fs-15 fw-semibold">$53,3654</td>
                          <td class="text-success fs-15 fw-semibold">Success</td>
                          <td class="">
                            <a class="btn btn-primary btn-sm rounded-11 me-2" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i><svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                  <path d="M0 0h24v24H0V0z" fill="none"></path>
                                  <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path>
                                </svg></i></a>
                            <a class="btn btn-danger btn-sm rounded-11" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i><svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                  <path d="M0 0h24v24H0V0z" fill="none"></path>
                                  <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path>
                                </svg></i></a>
                          </td>
                        </tr>
                        <tr class="border-bottom odd">
                          <td class="text-muted fs-15 fw-semibold text-center sorting_1">03.</td>
                          <td>
                            <div class="d-flex">
                              <span class="avatar avatar-md brround mt-1" style="background-image: url({{asset('admin/assets/images/users/12.jpg')}})"></span>
                              <div class="ms-2 mt-0 mt-sm-2 d-block">
                                <h6 class="mb-0 fs-14 fw-semibold">Jacob Thomson</h6>
                                <span class="fs-12 text-muted">jacobthomson@gmail.com</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-muted fs-15 fw-semibold">20-11-2020 </td>
                          <td class="text-muted fs-15 fw-semibold">$1,56,3654</td>
                          <td class="text-primary fs-15 fw-semibold">Pending</td>
                          <td class="">
                            <a class="btn btn-primary btn-sm rounded-11 me-2" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i><svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                  <path d="M0 0h24v24H0V0z" fill="none"></path>
                                  <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path>
                                </svg></i></a>
                            <a class="btn btn-danger btn-sm rounded-11" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i><svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                  <path d="M0 0h24v24H0V0z" fill="none"></path>
                                  <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path>
                                </svg></i></a>
                          </td>
                        </tr>
                        <tr class="border-bottom even">
                          <td class="text-muted fs-15 fw-semibold text-center sorting_1">04.</td>
                          <td>
                            <div class="d-flex">
                              <span class="avatar avatar-md brround mt-1" style="background-image: url({{asset('admin/assets/images/users/13.jpg')}})"></span>
                              <div class="ms-2 mt-0 mt-sm-2 d-block">
                                <h6 class="mb-0 fs-14 fw-semibold">Trevor Thomson</h6>
                                <span class="fs-12 text-muted">trevor@gmail.com</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-muted fs-15 fw-semibold">19-11-2020 </td>
                          <td class="text-muted fs-15 fw-semibold">$12.3</td>
                          <td class="text-success fs-15 fw-semibold">Success</td>
                          <td class="">
                            <a class="btn btn-primary btn-sm rounded-11 me-2" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i><svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                  <path d="M0 0h24v24H0V0z" fill="none"></path>
                                  <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path>
                                </svg></i></a>
                            <a class="btn btn-danger btn-sm rounded-11" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i><svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                  <path d="M0 0h24v24H0V0z" fill="none"></path>
                                  <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path>
                                </svg></i></a>
                          </td>
                        </tr>
                        <tr class="border-bottom odd">
                          <td class="text-muted fs-15 fw-semibold text-center sorting_1">05.</td>
                          <td>
                            <div class="d-flex">
                              <span class="avatar avatar-md brround mt-1" style="background-image: url({{asset('admin/assets/images/users/2.jpg)')}}"></span>
                              <div class="ms-2 mt-0 mt-sm-2 d-block">
                                <h6 class="mb-0 fs-14 fw-semibold">Kylie north</h6>
                                <span class="fs-12 text-muted">kylie@gmail.com</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-muted fs-15 fw-semibold">19-11-2020 </td>
                          <td class="text-muted fs-15 fw-semibold">$5.312.2</td>
                          <td class="text-primary fs-15 fw-semibold">Pending</td>
                          <td class="">
                            <a class="btn btn-primary btn-sm rounded-11 me-2" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i><svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                  <path d="M0 0h24v24H0V0z" fill="none"></path>
                                  <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path>
                                </svg></i></a>
                            <a class="btn btn-danger btn-sm rounded-11" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i><svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                  <path d="M0 0h24v24H0V0z" fill="none"></path>
                                  <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path>
                                </svg></i></a>
                          </td>
                        </tr>
                        <tr class="border-bottom even">
                          <td class="text-muted fs-15 fw-semibold text-center sorting_1">06.</td>
                          <td>
                            <div class="d-flex">
                              <span class="avatar avatar-md brround mt-1" style="background-image: url({{asset('admin/assets/images/users/14.jpg')}})"></span>
                              <div class="ms-2 mt-0 mt-sm-2 d-block">
                                <h6 class="mb-0 fs-14 fw-semibold">Jan Hodges</h6>
                                <span class="fs-12 text-muted">jan@gmail.com</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-muted fs-15 fw-semibold">19-11-2020 </td>
                          <td class="text-muted fs-15 fw-semibold">$5.312.2</td>
                          <td class="text-danger fs-15 fw-semibold">Cancel</td>
                          <td class="">
                            <a class="btn btn-primary btn-sm rounded-11 me-2" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i><svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                  <path d="M0 0h24v24H0V0z" fill="none"></path>
                                  <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path>
                                </svg></i></a>
                            <a class="btn btn-danger btn-sm rounded-11" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i><svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                  <path d="M0 0h24v24H0V0z" fill="none"></path>
                                  <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path>
                                </svg></i></a>
                          </td>
                        </tr>
                        <tr class="border-bottom odd">
                          <td class="text-muted fs-15 fw-semibold text-center sorting_1">07.</td>
                          <td>
                            <div class="d-flex">
                              <span class="avatar avatar-md brround mt-1" style="background-image: url({{asset('admin/assets/images/users/4.jpg')}})"></span>
                              <div class="ms-2 mt-0 mt-sm-2 d-block">
                                <h6 class="mb-0 fs-14 fw-semibold">Trevor Thomson</h6>
                                <span class="fs-12 text-muted">trevor@gmail.com</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-muted fs-15 fw-semibold">19-11-2020 </td>
                          <td class="text-muted fs-15 fw-semibold">$2,24,1421</td>
                          <td class="text-success fs-15 fw-semibold">Success</td>
                          <td class="">
                            <a class="btn btn-primary btn-sm rounded-11 me-2" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i><svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                  <path d="M0 0h24v24H0V0z" fill="none"></path>
                                  <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path>
                                </svg></i></a>
                            <a class="btn btn-danger btn-sm rounded-11" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i><svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                  <path d="M0 0h24v24H0V0z" fill="none"></path>
                                  <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path>
                                </svg></i></a>
                          </td>
                        </tr>
                        <tr class="even">
                          <td class="text-muted fs-15 fw-semibold text-center sorting_1">08.</td>
                          <td>
                            <div class="d-flex">
                              <span class="avatar avatar-md brround mt-1" style="background-image: url({{asset('admin/assets/images/users/5.jpg')}})"></span>
                              <div class="ms-2 mt-0 mt-sm-2 d-block">
                                <h6 class="mb-0 fs-14 fw-semibold">Emily Lewis</h6>
                                <span class="fs-12 text-muted">emily@gmail.com</span>
                              </div>
                            </div>
                          </td>
                          <td class="text-muted fs-15 fw-semibold">19-11-2020 </td>
                          <td class="text-muted fs-15 fw-semibold">$9.321.2</td>
                          <td class="text-danger fs-15 fw-semibold">Cancel</td>
                          <td class="">
                            <a class="btn btn-primary btn-sm rounded-11 me-2" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i><svg class="table-edit" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                  <path d="M0 0h24v24H0V0z" fill="none"></path>
                                  <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM5.92 19H5v-.92l9.06-9.06.92.92L5.92 19zM20.71 5.63l-2.34-2.34c-.2-.2-.45-.29-.71-.29s-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41z"></path>
                                </svg></i></a>
                            <a class="btn btn-danger btn-sm rounded-11" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i><svg class="table-delete" xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="16">
                                  <path d="M0 0h24v24H0V0z" fill="none"></path>
                                  <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9zm7.5-5l-1-1h-5l-1 1H5v2h14V4h-3.5z"></path>
                                </svg></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="data-table_info" role="status" aria-live="polite">Showing 1 to 8 of 8 entries</div>
                  </div>
                  <div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="data-table_paginate">
                      <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="data-table_previous"><a href="#" aria-controls="data-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                        <li class="paginate_button page-item active"><a href="#" aria-controls="data-table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                        <li class="paginate_button page-item next disabled" id="data-table_next"><a href="#" aria-controls="data-table" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- COL END -->
    </div><!-- ROW-5 END -->
  </div>
</div>
@endsection

@section('custom-css')
<style></style>
@endsection

@section('custom-js')
<script type="text/javascript">
  $(function() {
    $('[data-toggle="tooltip_view"]').tooltip({
      delay: {
        "show": 500,
        "hide": 100
      }
    })
  })
</script>
@endsection