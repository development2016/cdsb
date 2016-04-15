$(function(){

  // create
	$(".kerja-sukarelawan").hide();
    $(".adakah_anda_terlibat_dengan_kerja_kerja_sukarelawan").change(function(){

       if ($(this).val() === 'Ya') {
       		$(".kerja-sukarelawan").show(500);
       } else {
       		$(".kerja-sukarelawan").hide(500);

       }

    });
    $(".tergolong-oku").hide();
    $(".adakah_anda_tergolong_dalam_orang_kurang_upaya").change(function(){

       if ($(this).val() === 'Ya') {
            $(".tergolong-oku").show(500);
       } else {
            $(".tergolong-oku").hide(500);

       }

    });

    $(".tergolong-oku-profil").hide();
    $(".adakah_anda_tergolong_dalam_orang_kurang_upaya_profil").change(function(){

       if ($(this).val() === 'Ya') {
            $(".tergolong-oku-profil").show(500);
       } else {
            $(".tergolong-oku-profil").hide(500);

       }

    });

    $(".sektor-pekerjaan").hide();
    $(".pekerjaan-profil").change(function(){

       if ($(this).val() === 'Bekerja') {
            $(".sektor-pekerjaan").show(500);
       } else {
            $(".sektor-pekerjaan").hide(500);

       }

    });

    //update
    if ($('.adakah_anda_terlibat_dengan_kerja_kerja_sukarelawan:checked').val() == "Ya" ) {
      $(".kerja-sukarelawan").show();

    } else {
       $(".kerja-sukarelawan").hide();
    };
    if ($('.adakah_anda_tergolong_dalam_orang_kurang_upaya:checked').val() == "Ya" ) {
      $(".tergolong-oku").show();

    } else {
       $(".tergolong-oku").hide();
    };

    $(".adakah_anda_terlibat_dengan_kerja_kerja_sukarelawan").change(function(){

       if ($(this).val() === 'Tidak') {
        $('.nama_persatuan').val('');
        $('.jawatan').val('');
        $('.tempoh').val('');
       } 

    });


    $(".bilangan-anak").hide();
    $('#kdsprofil-status_perkahwinan').change(function(){

      if ($("#kdsprofil-status_perkahwinan option:selected").val() == 2) {

        $(".bilangan-anak").show(1000);

      } else {

        $(".bilangan-anak").hide();

      };


    });








    $('#create-sukarelawan').click(function(){
        $('#modal').modal('show')
        .find('#modalContent')
        .load($(this).attr('value'));

    });

    $('#update-sukarelawan').click(function(){
        $('#modal').modal('show')
        .find('#modalContent')
        .load($(this).attr('value'));

    });

    $('#create-isu').click(function(){
        $('#modal').modal('show')
        .find('#modalContent')
        .load($(this).attr('value'));

    });

    $('#update-isu').click(function(){
        $('#modal').modal('show')
        .find('#modalContent')
        .load($(this).attr('value'));

    });

    $('#create-profil').click(function(){
        $('#modal').modal('show')
        .find('#modalContent')
        .load($(this).attr('value'));

    });

    $('#update-profil').click(function(){
        $('#modal').modal('show')
        .find('#modalContent')
        .load($(this).attr('value'));

    });

    if($('#sukarelawan-alert').hasClass('sukarelawan-alert')){
        setTimeout(function(){
          $("#sukarelawan-alert").hide(1000);        
        }, 3000);
        $('input[type=text]').val('');
        $('textarea').val('');
        $('select').val('');

    }
    if($('#isu-alert').hasClass('isu-alert')){
        setTimeout(function(){
          $("#isu-alert").hide(1000);        
        }, 3000);
        $('input[type=text]').val('');
        $('textarea').val('');
        $('select').val('');

    }

    $('#confirmation-sukarelawan').click(function(){
        if($(this).is(':checked')){
           $('#btn-sukarelawan').removeAttr("disabled");
        }else {
            
             $('#btn-sukarelawan').attr("disabled", "true");
        }

    });




      $("#galleryimage-file").on('change', function() {
          //Get count of selected files
          var countFiles = $(this)[0].files.length;
          var imgPath = $(this)[0].value;
          var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          var image_holder = $("#image-holder");
          image_holder.empty();
          if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              for (var i = 0; i < countFiles; i++) 
              {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image"
                  }).appendTo(image_holder);
                }
                image_holder.show();
                reader.readAsDataURL($(this)[0].files[i]);
              }
            } else {
              alert("This browser does not support FileReader.");
            }
          } else {
            alert("Pls select only images");
          }
        });
      







});

