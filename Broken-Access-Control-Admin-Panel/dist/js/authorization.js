var allowedPages = ["index.html", "pages/user.html"];

window.onload = function() {
    // Mevcut URL'yi alın
    var currentUrl = window.location.href;
    
    // Eğer mevcut URL izin verilen sayfaların hiçbirine eşleşmiyorsa
    if (!isAllowedPage(currentUrl)) {
        // Hata mesajı gösterin ve ana sayfaya yönlendirin
        alert("Bu sayfaya erişim izniniz yok!");
        
        // Eğer sayfa "/pages/" altındaysa
        if (currentUrl.includes("/pages/")) {
            // Kök dizinine yönlendirin
            window.location.href = "../../../index.html";
        }
        
        // Ana sayfaya yönlendirin
        window.location.href = "../../index.html";
    }
};

function isAllowedPage(url) {
  // izin verilen sayfalar dizisinde mevcut URL'yi arayın
  for (var i=0; i<allowedPages.length; i++) {
    if (url.indexOf(allowedPages[i]) !== -1) {
      return true;
    }
  }
  return false;
}


