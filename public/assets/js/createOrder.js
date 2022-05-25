



/*window.onload = function() {
    var table = document.getElementById('filteTable'); 
    table.style.visibility = 'hidden';
    var refProduct = document.getElementById('refProduct');
    refProduct.onchange = function () {
        if (refProduct.value == "Select_Product") {
            table.style.visibility = 'hidden';
             } else {
                table.style.visibility = 'visible';
           }
     }
   
   
  
     $(document).ready(function(){

           $(document).on('change','#refProduct',function () {
            var refProduct =$(this).val();

            var a=$(this).parent();

            console.log(refProduct);

            var op="";
            $.ajax({
				type:'get',
                 url:'{{route("findPrice")}}',
				data:{'id':refProduct},
				dataType:'json',//return data will be json
				success:function(data){
					console.log("unitPrice");
					console.log(data.unitPrice);

					// here price is coloumn name in products table data.coln name

					a.find('#refProduct').val(data.unitPrice);

				},
				error:function(){

				}
			});

        });
      });
   

   
     /* $("document").ready(function () {
     
  /*      $("#filterTable").hide();
      
    $("#refProduct").change(function(){
        $(this).show();
      });
    });

 


   $(function () {

     $('#filterTable').hide();
    var table = $('#filterTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
        url: "{{ route('createorder') }}",
        data: function (d) {
                d.approved = $('#filterTable').val()
            }
        },
        columns: [
            {data: 'name', name: 'name'},
            {data: 'unitPrice', name: 'unitPrice'}
        ]
    });

    $('#refProduct').change(function(){
        table.draw();
        table.show();
    });

});*/

