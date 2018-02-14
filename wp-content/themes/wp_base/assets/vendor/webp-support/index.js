function detectWebp() {
    var img = document.createElement('img');
    img.onload = function() {
      try {
        document.querySelector("html").classList.add("webp");
      } catch (ex) {}
    };

    img.onerror = function() {
      try {
        document.querySelector("html").classList.add("no-webp");
      } catch (ex) {}
    };
    img.src = 'data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAsAAAABBxAREYiI/gcAAABWUDggGAAAADABAJ0BKgEAAQABABwlpAADcAD+/gbQAA==';
}

detectWebp();
