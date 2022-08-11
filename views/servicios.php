<h1>Servicios</h1>

<div id="smart-button-container">
    <div style="text-align: center;">
        <div id="paypal-button-container"></div>
    </div>
</div>

<table class="tabla">
    <thead>
        <tr>
            <th width="20%">ID</th>
            <th width="20%">CLIENTE</th>
            <th width="20%">CANTDAD</th>
            <th width="20%">FECHA</th>
        </tr>
    </thead>

    <tbody id="idBody">

    </tbody>
</table>

<script src="https://www.paypal.com/sdk/js?client-id=Acq5sBkNdlbNmGR67YTyoYttMw-kcVnUlvLhi8Uv3TdVNGHaFScfPu1Vl4y4jJ7t50B0GHh43hXn-Lcf&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
<script>
    var API = new APISchema();

    function initPayPalButton() {
        paypal.Buttons({
            style: {
                shape: 'pill',
                color: 'gold',
                layout: 'vertical',
                label: 'paypal',

            },

            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        "description": "Ohh si",
                        "amount": {
                            "currency_code": "USD",
                            "value": 1156.99
                        }
                    }]
                });
            },

            onApprove: function(data, actions) {
                return actions.order.capture().then(function(orderData) {



                    // Full available details
                    // console.log('order ', JSON.stringify(orderData, null, 2));
                    console.log('paypal_order_id ', JSON.stringify(orderData['id'], null, 2));
                    var paypal_order_id = JSON.stringify(orderData['id'], null, 2);
                    console.log('paypal_payer_id ', JSON.stringify(orderData['purchase_units'][0]['payee']['merchant_id'], null, 2));
                    var paypal_payer_id = JSON.stringify(orderData['purchase_units'][0]['payee']['merchant_id'], null, 2);
                    console.log('paypal_payer_email ', JSON.stringify(orderData['purchase_units'][0]['payee']['email_address'], null, 2));
                    var paypal_payer_email = JSON.stringify(orderData['purchase_units'][0]['payee']['email_address'], null, 2);
                    console.log('paypal_country_code ', JSON.stringify(orderData['purchase_units'][0]['shipping']['address']['country_code'], null, 2));
                    var paypal_country_code = JSON.stringify(orderData['purchase_units'][0]['shipping']['address']['country_code'], null, 2);
                    console.log('paypal_amount ', JSON.stringify(orderData['purchase_units'][0]['payments']['captures'][0]['amount']['value'], null, 2));
                    var paypal_amount = JSON.stringify(orderData['purchase_units'][0]['payments']['captures'][0]['amount']['value'], null, 2);
                    console.log('paypal_currency ', JSON.stringify(orderData['purchase_units'][0]['payments']['captures'][0]['amount']['currency_code'], null, 2));
                    var paypal_currency = JSON.stringify(orderData['purchase_units'][0]['payments']['captures'][0]['amount']['currency_code'], null, 2);
                    console.log('status ', JSON.stringify(orderData['status'], null, 2));
                    var status = JSON.stringify(orderData['status'], null, 2);
                    console.log('created_date ', JSON.stringify(orderData['create_time'], null, 2));
                    var created_date = JSON.stringify(orderData['create_time'], null, 2);

                    fetch(API.paypal, {
                            method: 'POST',
                            headers: {
                                'Accept': 'application/json',
                                'Content-Type': 'application/json'
                            },
                            body: JSON.stringify({
                                paypal_order_id: paypal_order_id,
                                paypal_payer_id: paypal_payer_id,
                                paypal_payer_email: paypal_payer_email,
                                paypal_country_code: paypal_country_code,
                                paypal_amount: paypal_amount,
                                paypal_currency: paypal_currency,
                                status: status,
                                created_date: created_date
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log(data);
                            alert('Los datos se guardaron en la base de datos');
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });

                    // Show a success message within this page, e.g.
                    const element = document.getElementById('paypal-button-container');
                    element.innerHTML = '';
                    element.innerHTML = '<h3>TArigato ONI-CHAN!</h3>';
                    window.setTimeout(function() {
                        window.location = "?view=servicios";
                    }, 1500);


                    // Or go to another URL:  actions.redirect('thank_you.html');

                });
            },

            onError: function(err) {
                console.log(err);
            }
        }).render('#paypal-button-container');
    }
    initPayPalButton();


    fetch(API.paypal, {
            method: "GET",
            headers: {
                "Content-type": "application/json",
            },
        })
        .then((response) => response.json())
        .then((data) => {
            if (data.length > 0) {
                $("#idBody").empty();
                data.forEach((doc) => {
                    metodoAppend(doc);
                });
            }
        })
        .catch((err) => {});

    function metodoAppend(doc) {
        $("#idBody").append(
            "<tr>" +
            "<td>" +
            doc.paypal_order_id +
            "</td>" +
            "<td>" +
            doc.paypal_payer_id +
            "</td>" +
            "<td>" +
            doc.paypal_amount +
            "</td>" +
            "<td>" +
            doc.created_date +
            "</td>" +
            "</tr>"
        );
    }
</script>
<link rel="stylesheet" href="./res/css/tabla.css" />