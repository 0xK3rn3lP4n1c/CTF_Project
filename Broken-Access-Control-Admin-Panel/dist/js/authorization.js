var allowedPages = [
    "index.html",
    "pages/user.html"
  ];
  
  window.onload = function() {
    // Mevcut URL'yi alın
    var currentUrl = window.location.pathname;
  
    // Eğer mevcut URL izin verilen sayfaların hiçbirine eşleşmiyorsa ve kullanıcı admin değilse
    if(!isAllowedPage(currentUrl) && !isAdminUser()) {
      // Hata mesajı gösterin ve ana sayfaya yönlendirin
      alert("Bu sayfaya erişim izniniz yok!");
      window.location.href = "/index.html";
    }
  };
  
  function isAllowedPage(url) {
    // izin verilen sayfalar dizisinde mevcut URL'yi arayın
    for(var i=0; i<allowedPages.length; i++) {
      if(url === allowedPages[i]) {
        return true;
      }
    }
    return false;
  }
  
