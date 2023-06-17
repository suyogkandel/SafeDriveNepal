@extends('master')
@section('content')
<div class="p-4">
<table border="1" class="text-3xl" CELLPADDING=10 CELLSPACING=10 style="border-collapse: collapse; ">
  <tr>
    <th>S.N</th>
    <th>Vehicle No.</th>  
    <th>Driver's Name</th>
    <th>Route</th>
    <th>Max Speed</th>
    <th>Alert Message</th>
  </tr>
  <tr class="bg-green-300">
    <td>1</td>
    <td>BA.6666</td>
    <td>Pravin Gupta</td>
    <td>Harkapur-Pulchock</td>
    <td>66Km/hr</th>
    <td>Normal</td>
  </tr>
  <tr class="bg-red-300">
    <td>2</td>
    <td>BA.2324</td>
    <td>Ram Prasad Paudel</td>
    <td>Orchid-Birendra</td>
    <td>75Km/hr</td>
    <td>OverSpeed</td>
  </tr>
  <tr class="bg-green-300">
    <td>3</td>
    <td>BA.8769</td>
    <td>Hari Neupane</td>
    <td>Chaubiskothi-NewCapitalCollege</td>
    <td>55Km/hr</td>
    <td>Normal</td>
  </tr>
  <tr class="bg-red-300">
    <td>4</td>
    <td>BA.9676</td>
    <td>Ramkumari Shrestha</td>
    <td>Devghat-ParasBusPark</td>
    <td>80Km/hr</td>
    <td>OverSpeed</td>
  </tr>
  <tr class="bg-green-300">
    <td>5</td>
    <td>BA.2657</td>
    <td>Sadan Tharu</td>
    <td>Pulchock-Dharmachock</td>
    <td>60Km/hr</td>
    <td>Normal</td>
  </tr>
</table>
<div class="m-64"></div>
</div>
@endsection