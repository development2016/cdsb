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





});

