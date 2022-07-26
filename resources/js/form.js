import Swal from "sweetalert2";

export default function () {
    (($) => {
        $('form').submit((e) => {
            e.preventDefault();
            let form = new FormData(e.currentTarget);

            $.ajax({
                url: "/mail/send",
                data: form,
                headers: {
                    'X-CSRF-Token': $('meta[name="_token"]').attr('content')
                },
                processData: false,
                contentType: false,
                type: 'POST',
                success: function (data) {
                    Swal.fire(
                        'Спасибо за вашу заявку!',
                        'Вам перезвонят в течении минуты!',
                        'success'
                    )
                }
            }); 

        });
    })(jQuery)
};
