$(document).ready(function(){
    $('.modif').on('click',function() {
      $('#editemploye').modal('show');

      $tr = $(this).closest('tr');
      var data = $tr.children("td").map(function(){
        return $(this).text();
      }).get();

      console.log(data);
      
           $('#new_nom').val(data[1]);
           $('#new_prenom').val(data[2]);
           $('#new_mat').val(data[3]);;
           $('#new_dateC').val(data[4]);
           $('#new_LDN').val(data[5]);
           $('#new_countries').val(data[6]);
           $('#new_nbrEnf').val(data[7]);
           $('#new_Nact').val(data[8]);
           $('#new_CIN').val(data[9]);
           $('#new_passport').val(data[10]);
           $('#new_tel').val(data[11]);
           $('#new_email').val(data[12]);
           $('#new_groupage').val(data[13]);

    });


    $('#editform').on('submit',function(e){
        e.preventDefault();

        let id = $('#id').val();

        $.ajax({
            type: "PUT",
            url: "/modify/"+id,
            data: $('#editform').serialize(),
            success: function(response) {
                console.log(response);
                $("#editemploye").modal('hide');
                alert("Data Updated");
            },
            error: function(error){
                console.log(error);
            }
        });
    });
                     
});

