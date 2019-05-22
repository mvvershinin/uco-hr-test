$(document).ready(function () {
    let url = 'http://uco-hr-test.nyanyanya.site/ajax/contacts?page=1';
    let table = $('.ajaxTableBody');
    let table_container = $('.ajaxTable');
    let button_next = '.ajaxNext';

    /*
     * get ajax contact list
     */
    function getList(url) {
        $.ajax({
            url: url,
            type: 'GET',
            dataType: "json",
        })
            .done(function (data) {
                jQuery.each(data.data, function(index, item) {
                    row = makeRow(item);
                    table.append(row);
                });
                $(button_next).remove();
                makeNext(data.next_page_url);
            });
    }

    /*
    *   make row in table
    */
    function makeRow(item) {
        let row = "<tr>";

        jQuery.each(item, function(index, item) {
            row += "<td>" + item + "</td>";
        });
        row += "</tr>";

        return row;
    }

    /*
    *   remove than append new next button
     */
    function makeNext(url) {
        if(url){
            next = "<button class=\"btn btn-success ajaxNext\" data-url=\"" +url+"\">Read More</button>"
            table_container.append(next);
        }
    }

    /*
    *   get next items of contact list
     */
    $(document).on('click', button_next, function(){
        event.preventDefault();
        getList($(this).data('url'));
    });

    getList(url);
});
