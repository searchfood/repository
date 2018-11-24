<!doctype html>
<html lang="en">
  <head>
        <title>Dashboard | Search Food</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?=URL?>/public/img/icon/SF.ico" type="image/x-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Copse" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Niramit" rel="stylesheet">

        <!-- Fontawesome 5 -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <!-- CSS Files -->
        <link rel="stylesheet" href="<?=URL?>/public/css/dashboard.css">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <style>.card {-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.10);-moz-box-shadow: 0 1px 2px rgba(0,0,0,.10);box-shadow: 0 1px 2px rgba(0,0,0,.10);border: 1px solid rgba(0,0,0,.2);border-radius: 0;color: black;}.card-header{font-size: 20px;}.col-md-3 .card .card-footer{background-color: #fff;border-top: 2px solid;font-size: 18px}</style>    
    <body style="font-family: 'Niramit', sans-serif;background-color: #f1f2f7;">

        <?php include 'app/Views/templates/dashboard.php'?>

        <div class="container mt-5">
            <section class="row">
                <div class="col-md-3">
                    <div class="card text-success">
                        <div class="card-body p-2">                    
                            <img style="float: left" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAANgSURBVGhD7ZhLaBNBGMe3vg8+8XmyUJLNNrYe1LM96EUvKtKD2mZmI0Qt6kmPGkEEERXBB9Q3Hoqmmd1atVfrSUQUi69DLxVEBLXqRRSq8f9tAjbJh7jb2ZrALvzIMt83m/nt7MzOrJFwxVbTke8SjizUIWOmEoNmf2aRgZP3TEJ9ocQRgw3UG0pciERqikik1ohEao3wRcRPU8lR/H7h45oIWwQrhjcGjmSuczkX10Yk8g/Q0gcoEmlSHUsSSj4Cn7ncCaNdRMlf4GLCla0kUHms7s5MN12xGX/8kq0fFJ0ieIx+xPNyIzU4meuajbK0J6Wki57pMR1xzOxNraR44zUxC5NAvvIagdEpYjlyLzUynk+txYU/cDlejzniNOUlc+0zUPa0KicIukRwt0eMXPtUy+lciPNPXE45YjfJWI7dxsd9oq9HxHlqGB6XLj5exVsjm51SrCOGmbg/tIkosb/UqDNsnKM0IeD8RlXML7pELFdkPBFHXOXiHMg9HM/b6yHfz8V9oW2MKHHUu7voGS4eOhoH+2MSiQ3smItp+AWXEyr6BrssxFVqC8nQzIVp9jLKvlXmhIZOETT+K97a60iGjqZcZl5C2TZmtJuhf27SKuJBy3ZxnVuiUBniBxEfLL4YufoB0S/yBzR4GJxFb2zyPqCNO+JOZzOk7nH1AhGmSBnFHhiC2CFa0ns2BaMBL9ATVblBmDSRcsbQG8dJhN7u6LGHTI4//pNIkdJqALNdio37QYcI3iHPW+9uX9Dcm1rBxf/CEImYeWExMX9oEVHyIzWotCxnc1iw1Kd6Lbd3LmXjftD1aCVzYhk1Cr3zhIvziGdUx1JyFR/3gbYxouQur1GOFGycAYM8S3VQ9wAX94VGkVe0H6eGYYq9wuaMw+u5vvSc2MC+mTgf4XJ8oU2EUOIUidCRcIVE2evKHBpP6ImTJEHTL8omvhchtIp4iEuNrphf8sH+3W4yndQG2ndYKt1C22EqpzGFnrvDXyMA+kW8uz5KFzYduyPWZyep4W33s9MSvek11FMQ6EH8O1c3MGGIjAePUfTJ1Bdhi+AP6PtWOx6zPVUxnYQuMllEIrVGJFJrRCK1RkkEe2gmWF+cI5EHFYV1h+XY24zYLXsxbXKw2OuuN+iR8iQKRsNvh9Seg/tXCS0AAAAASUVORK5CYII=">
                            <h4 class="text-center my-2">R$ 0,00</h4>
                        </div>
                        <div class="card-footer text-center border-success">
                            Meus Ganhos
                        </div>
                    </div>
                </div>                
                <div class="col-md-3">
                    <div class="card text-info">
                        <div class="card-body p-2">                                
                            <i style="float: left;font-size: 50px" class="fas fa-shipping-fast"></i>
                            <h4 class="text-center my-2">0</h4>
                        </div>
                        <div class="card-footer text-center border-info">
                            Pedidos Entregues
                        </div>
                    </div>
                </div>                
                <div class="col-md-3">
                    <div class="card text-dark">
                        <div class="card-body p-2">                                                            
                            <img style="float: left;width: 50px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAL/SURBVGhD7Zo9iBNBFMdz5xcW4ic2Nn6kCiZhc0kMUQiHNiKWsbRSRDgtvEKwuE4sBCshXmeh4AdaiGJhZSEiCOKBJ4iFIiLeITZ34IF3+pv1JeQm426STWait3/4scnMe2/eP7uB2U0SsUKUy+VG4dnIyMgCx1mOk6VSaYtM/xui8SPwk+Z/NcPYq1QqtVbCBl5DNPxeGp/gLKzP5/O7ef9SxsYlbrCVzWZ3yhn4DNtghuZrnucdlfHHEupO1Wp1VTqd3hwEje5XDdP8FKY28XoaLsIBNQ7PTXnNlMvlDbJkb1UoFLbSwC2am5dmQlFGJN0XY3UjbUH+Jzgh6b0Rhe/oC4UR1YiwxCV5UEpEU6VSWU3BH9oC7fCm+XLhC3/YEBMKH0hNWokmim3Ui9sEIzellWiiWGykF8RGdFEsNkITar/1FRaaxzvBtZE5OKX2WVJmmPdjNPWxKaYtXBsZk/RlUtt45tQezJRjxKmRTCazXdJbxPxVPT4Ip0bU5lLSW8T8ZT0+CKdGWHyPpLeI+et6fBCujYxKeouYmzLl/A2nRtQmUdJbxPxtPT4I12fktKQvkzLI/Ds9PginRuB7MplcJyUaoqmzhthAXBtRDVyQEr7UbS9jb02xQTg3Ak+lhC/ed3OHOBBn5K6U8MUd4l7Gl/S4MFwaWYQHXEo7pERDNHUSvmjxgbgwMseiVzzPS0qqUcStIe4YvNDyjdg2Ml0sFndJSrsaIu+8VqcFq0Y4C3kJ71g0+tBUs441Iyw0zxf5ULeQXzPVrWP1jPST2Iguiq0oI69Z8EmXfDPUa8C8tS/7bNAdYZioUdVrNmPTiHrkcwZUQ91wH4y1FdaM9BurRlhMbTfUbyidcg/UAzxjXYVNIzOEDf+J7lzkq8vLVNfHppFFFhvnqF/7oZCnNo+PeG2q62PTSF+Jjeii2P9hRP3mbVrAIjekleiiWEdP0HsJZ2RC2oguCh4HdS9uXKyPfOj5P4r4ZPbBJYpP9hvWucbxnHoWJsuvFCUSvwEX+K25n66sTQAAAABJRU5ErkJggg==">
                            <h4 class="text-center my-2">0</h4>
                        </div>
                        <div class="card-footer text-center border-dark">
                            Funcionários
                        </div>
                    </div>
                </div>                
                <div class="col-md-3">
                    <div class="card" style="color: #f39c12;">
                        <div class="card-body p-2">                                
                            <img style="float: left;width: 50px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAPRSURBVHhe7VpNaNRAGI2/qBR2Z7YqgigeBA8V9SSIIHoSPHgRxYMHwYv4c1CvIlpBEBVEUZPJtuAPaEHw4EFPClLBinjRQ7V48Cq0brJWRDR+3+brst39bJLd6SZp8uCRkJl5X97b2WSSXSNHjhw5cuTIkYPDuCkKri0uAEcdJX+5tvTSQP9cxSieO3ogO9EwaYo1IDbWLJ5Cjk1YhXVkKxy8c8Z8R4m3jFgqCV7eoSeyF4yKXdzDCaWZjlXaS/aC4djyCieSZjq2uEH2ggEB3ONE0kzw9IDsBQM7cyK6CVfrv0iuTTeTGYAtnyG5Nt1MZAB4se3WBTeBAYjPeGtC4j7fRx8TF0DVFmeonOEqcZrro5OJCgBuST8mBgtFKmfgPswCl+uri8maAUpaVKoOPMb21cREBVAtFzdRqTpgBvRxfXUxOQEo+ZLKtAC+Gi/YMRqYnADKYj+VaYFjyX3sGA2c9QDgiWsSVnVf4VMcgU/5KVzZB2F7Gab2qapdOlRVYnfVKmz2howFVKYF2OZ/FUo7XUschPEnQacf9E04/gS2w7AdhWNOY+0w7MYMuOR5xjySmDX4j+ryKlN/RnYjACzy0Btcu4RktOPvo9VLYQY85moHsSsB1KjkK8fs6SUpbXBvrVwB5t+wNUOwewEglfhUGehdT3IdwzFLG0D3S0udCOxuAD6/OWWxnSTbhlMu7gCt8SbtyIwjALwz/ITZcIBkIwPvHv4bXl4/CmMJAIkvPCpKHibp0IDwjuh8WRJbADUqeZykQ8O1SsdYrTYZawBVu7CFpEMDnxc4rXYZXwBKVGZa/f0P/qpQfm/Ra5OxBQDf5eckGxlwHtreF8YYgDxLstMAS9qF0H4Cift0eBpwbKNWJ4wtALiY7SLZOiqm2AY13k/1wX08Rs111B6KGrU6YCwBgM5vz1y1jGRhUdOzHJazA9ztzT8GbdCHuhs4FjWa+7bDmAIQI6jnP8EVj8LtcILrN43QB/viGBzbyfq/kXEFcK1Sllvx11mufSbimNpY0ODaozKmAOQH4B+uLQxxLGpwbVGJnsheMLAzJ5Jm5gHkAUQLYO79P0CJu2QvGHDruciJpJviPNkLBr6+1vksHjdrXgaKG8leOMDAO81CaSWsJa6TrfCAx9HFsCq7neaZANcyWEeIm55pLCJb0VF7MaFEPwRxH0SHGLLFW6jER9hy47XTP9faP1z7yMbsAQryhhup5Ou2/7KadLCGGzmXzSNY01Oc6+YRrHFkFswjMm0ekWnziKYAhjNlHpFp84hMm0dk2jwi0+ZzpB6G8Q9Dt3fuVSxBFwAAAABJRU5ErkJggg==">                            
                            <h4 class="text-center my-2">0</h4>
                        </div>
                        <div class="card-footer text-center" style="border-color: #f39c12">
                            Avaliações
                        </div>
                    </div>
                </div>                
            </section>

            <div class="row mt-5">
                <div class="col">
                    <div class="card">
                        <div class="card-header py-1 text-danger border-danger" style="border-bottom: 2px solid">
                            <img src="data:image/png;base64,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">
                            Faturas a Pagar
                        </div>
                        <div class="card-body">
                        
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header py-1 text-success border-success" style="border-bottom: 2px solid">
                            <img src="<?=URL?>/public/img/icon/1.png">
                            Faturas Pagas
                        </div>
                        <div class="card-body">
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript">$(function () {$('[data-tooltip="tooltip"]').tooltip()});</script>
    </body>
</html>