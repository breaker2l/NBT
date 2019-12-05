var pic_el,show_el;

function init()
{ pic_el = document.getElementById("thepic"); //(4) image input element
  show_el = document.getElementById("pic"); //(5) image preview element are initialized on page load
 }
 
 function preview(e)
 { var files = e.target.files, file;
   if (files && files.length > 0)
   { file = files[0];
     if (imgURL(file)||dataURL(file)) return; // (6) target file is obtained from the input event and an image URL or a data URL (6) is created and displayed in the previewing area by calling the following functions that apply the HTML5 URL ad HTML5 file APIs.
     else error();
     }
    }
    
function imgURL(file) // Use HTML5 URL API
{ try
   { var URL = window.URL || window.webkitURL;
     var imgURL = URL.createObjectURL(file);
     show_el.src = imgURL;
     URL.revokeObjectURL(imgURL);
     } catch (ex) { return false;}
     return true;
     }

function dataURL(file) // USe HTML5 File API
{ try
  { var fileReader = new FileReader();
    fileReader.onload = function (ev)
        { show_el.src = ev.target.result; };
     fileReader.readAsDataURL(file);
   } catch (ex) { return false;}
  return true;
  }
    
