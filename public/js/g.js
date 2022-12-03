
        function payment(x){
            if(x==1){
                document.getElementById("walletpay").style.display="block";
                document.getElementById("onlinepay").style.display="none";
            }

            else if(x==2){
                document.getElementById("onlinepay").style.display="block";
                document.getElementById("walletpay").style.display="none";
            }
            else{

                document.getElementById("walletpay").style.display="none";
                document.getElementById("onlinepay").style.display="none";
            }
            return;
        }



       function display(){
            if(document.getElementById('btnradio1').checked == true) {
                var radio= document.getElementById('btnradio1').value;
                  document.getElementById("product_name").innerHTML
                        = radio;
                var price = document.getElementById('p1').textContent;
                document.getElementById("product_price").innerHTML
                        = price;

                document.getElementById("hidden_price").value = price;


              }

            else if(document.getElementById('btnradio2').checked == true) {
                var radio= document.getElementById('btnradio2').value;
                  document.getElementById("product_name").innerHTML
                        = radio;

                var price = document.getElementById('p2').textContent;
                document.getElementById("product_price").innerHTML
                        = price;

                    document.getElementById("hidden_price").value = price;
              }
              else if(document.getElementById('btnradio3').checked == true) {
              var radio= document.getElementById('btnradio3').value;
                document.getElementById("product_name").innerHTML
                      = radio;
                var price = document.getElementById('p3').textContent;
                document.getElementById("product_price").innerHTML
                        = price;
                        document.getElementById("hidden_price").value = price;
              }

              else if(document.getElementById('btnradio4').checked == true) {
                var radio= document.getElementById('btnradio4').value;
                  document.getElementById("product_name").innerHTML
                        = radio;

               var price = document.getElementById('p4').textContent;
                document.getElementById("product_price").innerHTML
                        = price;
                        document.getElementById("hidden_price").value = price;
              }
              else if(document.getElementById('btnradio5').checked == true) {
            var radio= document.getElementById('btnradio5').value;
              document.getElementById("product_name").innerHTML
                    = radio;

                var price = document.getElementById('p5').textContent;
                document.getElementById("product_price").innerHTML
                        = price;
                        document.getElementById("hidden_price").value = price;
              }
              else if(document.getElementById('btnradio6').checked == true) {
              var radio= document.getElementById('btnradio6').value;
              document.getElementById("product_name").innerHTML
                    = radio;
                var price = document.getElementById('p6').textContent;
                document.getElementById("product_price").innerHTML
                        = price;
                        document.getElementById("hidden_price").value = price;
              }
              else if(document.getElementById('btnradio7').checked == true) {
            var radio= document.getElementById('btnradio7').value;
              document.getElementById("product_name").innerHTML
                    = radio;
                    var price = document.getElementById('p7').textContent;
                document.getElementById("product_price").innerHTML
                        = price;
                        document.getElementById("hidden_price").value = price;
              }
              else if(document.getElementById('btnradio8').checked == true) {
            var radio= document.getElementById('btnradio8').value;
              document.getElementById("product_name").innerHTML
                    = radio;
                    var price = document.getElementById('p8').textContent;
                document.getElementById("product_price").innerHTML
                        = price;
                        document.getElementById("hidden_price").value = price;
              }
              else if(document.getElementById('btnradio9').checked == true) {
            var radio= document.getElementById('btnradio9').value;
              document.getElementById("product_name").innerHTML
                    = radio;
                    var price = document.getElementById('p9').textContent;
                document.getElementById("product_price").innerHTML
                        = price;
                        document.getElementById("hidden_price").value = price;
              }
              else if(document.getElementById('btnradio10').checked == true) {
            var radio= document.getElementById('btnradio10').value;
              document.getElementById("product_name").innerHTML
                    = radio;
                    var price = document.getElementById('p10').textContent;
                document.getElementById("product_price").innerHTML
                        = price;
                        document.getElementById("hidden_price").value = price;
              }
              else if(document.getElementById('btnradio11').checked == true) {
            var radio= document.getElementById('btnradio11').value;
              document.getElementById("product_name").innerHTML
                    = radio;
                    var price = document.getElementById('p11').textContent;
                document.getElementById("product_price").innerHTML
                        = price;
                        document.getElementById("hidden_price").value = price;
              }
              else if(document.getElementById('btnradio12').checked == true) {
            var radio= document.getElementById('btnradio12').value;
              document.getElementById("product_name").innerHTML
                    = radio;
                    var price = document.getElementById('p12').textContent;
                document.getElementById("product_price").innerHTML
                        = price;
                        document.getElementById("hidden_price").value = price;
              }
              else if(document.getElementById('btnradio13').checked == true) {
            var radio= document.getElementById('btnradio13').value;
              document.getElementById("product_name").innerHTML
                    = radio;
                    var price = document.getElementById('p13').textContent;
                document.getElementById("product_price").innerHTML
                        = price;
                        document.getElementById("hidden_price").value = price;
              }
              else if(document.getElementById('btnradio14').checked == true) {
            var radio= document.getElementById('btnradio14').value;
              document.getElementById("product_name").innerHTML
                    = radio;
                    var price = document.getElementById('p14').textContent;
                document.getElementById("product_price").innerHTML
                        = price;
                        document.getElementById("hidden_price").value = price;
              }
              else if(document.getElementById('btnradio15').checked == true) {
            var radio= document.getElementById('btnradio15').value;
              document.getElementById("product_name").innerHTML
                    = radio;
                    var price = document.getElementById('p15').textContent;
                document.getElementById("product_price").innerHTML
                        = price;
                        document.getElementById("hidden_price").value = price;
              }
              else if(document.getElementById('btnradio16').checked == true) {
            var radio= document.getElementById('btnradio16').value;
              document.getElementById("product_name").innerHTML
                    = radio;
                    var price = document.getElementById('p16').textContent;
                document.getElementById("product_price").innerHTML
                        = price;
                        document.getElementById("hidden_price").value = price;
              }

              else {
                document.getElementById("product_name").innerHTML
                    = 'Please Select the Product First.';
              }

        }


    //document.getElementById("product_name").innerHTML = radio;
