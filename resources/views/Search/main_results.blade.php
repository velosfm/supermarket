@extends('main')
@section('content')
<div class="d-grid gap-3 justify-content-center px-5 mb-5">
<h1>Δείτε τα αποτελέσματα που βρήκαμε για εσάς</h1>
<h2>  Επιλέξτε αλυσίδα Super Market </h2>
</div>
<div class="d-grid gap-3">
<ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
  <li class="nav-item" role="presentation">
    <a
      class="nav-link active" 
      id="ex1-tab-2"
      style="border-right: 1px solid #cccccc;"
      data-bs-toggle="tab"
      href="#ex1-tabs-2"
      role="tab"
      aria-controls="ex1-tabs-2"
      aria-selected="false"
      ><img src="/assets/images/kritikos.png" style="width: auto; height: 60px;"></a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex1-tab-3"
      style="border-right: 1px solid #cccccc;"
      data-bs-toggle="tab"
      href="#ex1-tabs-3"
      role="tab"
      aria-controls="ex1-tabs-3"
      aria-selected="false"
      ><img src="/assets/images/masoutis.png" style="width: 150px; height: 40px;"></a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex1-tab-4"
      style="border-right: 1px solid #cccccc;"
      data-bs-toggle="tab"
      href="#ex1-tabs-4"
      role="tab"
      aria-controls="ex1-tabs-4"
      aria-selected="false"
      ><img src="/assets/images/marketin.png" style="width: auto; height: 60px;"></a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex1-tab-5"
      style="border-right: 1px solid #cccccc;"
      data-bs-toggle="tab"
      href="#ex1-tabs-5"
      role="tab"
      aria-controls="ex1-tabs-5"
      aria-selected="false"
      ><img src="/assets/images/mymarket.png" style="width: auto; height: 60px;"></a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link"
      id="ex1-tab-6"
      style="border-right: 1px solid #cccccc;"
      data-bs-toggle="tab"
      href="#ex1-tabs-6"
      role="tab"
      aria-controls="ex1-tabs-6"
      aria-selected="false"
      ><img src="/assets/images/sklavenitis-logo.png" style="width: 150px; height: 40px;"></a
    >
  </li>
  <li class="nav-item" role="presentation">
    <a
      class="nav-link "
      id="ex1-tab-1"
      style="border-right: 1px solid #cccccc;"
      data-bs-toggle="tab"
      href="#ex1-tabs-1"
      role="tab"
      aria-controls="ex1-tabs-1"
      aria-selected="true"
      ><img src="/assets/images/ab.png" style="width: auto; height: 60px;"></a
    >
  </li>
</ul>
<div class="tab-content" id="ex1-content">
  
  <div class="tab-pane fade show active" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tabs-2">
    Προιόντα Κρητικός
     <div class="ratio ratio-16x9">
    <iframe class="embed-responsive-item" src="https://kritikos-sm.gr/search/?product={{$query}}" style: width="100%" height="100%" allowfullscreen></iframe></div>
  </div>
  <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tabs-3">
    Προιόντα Μασούτης
     <div class="ratio ratio-16x9">
    <iframe class="embed-responsive-item" src="https://eshop.masoutis.gr/categories/index/search?text={{$query}}" style: width="100%" height="100%" allowfullscreen></iframe></div>
  </div>
  <div class="tab-pane fade" id="ex1-tabs-4" role="tabpanel" aria-labelledby="ex1-tabs-4">
    Προιόντα Μαρκετ ΙΝ
     <div class="ratio ratio-16x9"><iframe class="embed-responsive-item" src="https://www.market-in.gr/el-gr/ALL?Title={{$query}}" style: width="100%" height="100%" allowfullscreen></iframe></div>
  </div>
  <div class="tab-pane fade" id="ex1-tabs-5" role="tabpanel" aria-labelledby="ex1-tabs-5">
    Προιόντα My Market
     <div class="ratio ratio-16x9"><iframe class="embed-responsive-item" src="https://www.mymarket.gr/search?query={{$query}}" style: width="100%" height="100%" allowfullscreen></iframe></div>
  </div>
  <div class="tab-pane fade" id="ex1-tabs-6" role="tabpanel" aria-labelledby="ex1-tabs-6">
    Προιόντα Σκλαβενίτης
     <div class="ratio ratio-16x9"><iframe class="embed-responsive-item" src="https://www.sklavenitis.gr/apotelesmata-anazitisis/?Query={{$query}}" style: width="100%" height="100%" allowfullscreen></iframe><
  </div>
</div>
<div
    class="tab-pane fade"
    id="ex1-tabs-1"
    role="tabpanel"
    aria-labelledby="ex1-tabs-1"
  >
    Προιόντα Βασιλόπουλος
    <div class="ratio ratio-16x9">
      <a href="ab.gr/eshop/search?q={{$query}}" onclick="return popitup('https://ab.gr/eshop/search?q={{$query}}')"
        >Link στα αποτελέσματα της αναζήτησης</a>
<script>
function popitup(url) {
        newwindow=window.open(url,'name','height=800,width=auto');
        if (window.focus) {newwindow.focus()}
        return false;
    }
</script>
  </div>
  </div>
</div>
</div>
@endsection