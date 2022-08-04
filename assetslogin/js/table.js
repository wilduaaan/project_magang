$(function () {
    if (Modernizr.touch) {
        var e = $(".focus-highlight");
        e.length && e.find("td, th").attr("tabindex", "1").on("touchstart", function () {
            $(this).focus()
        }), $(".tablesorter").find("th").addClass("needsclick")
    }
    table.table();
}), table = {
    table: function () {
        var t = $("#table");
        var n = {
            container: $(".ts_pager"),
            fixedHeight: !0,
            removeRows: !1,
            output: "{startRow} - {endRow} / {filteredRows} ({totalRows})",
            ajaxUrl: t.attr('data-url') + '?page={page}&size={size}&{filterList:fcol}&{sortList:col}',
            ajaxProcessing: function (data) {
                if (data && data.hasOwnProperty('rows')) {
                    var indx, r, row, c, d = data.rows,
                            total = data.total_rows,
                            headers = data.headers,
                            headerXref = headers.join(',').replace(/\s+/g, '').split(','),
                            rows = [],
                            len = d.length;
                    for (r = 0; r < len; r++) {
                        row = [];
                        for (c in d[r]) {
                            if (typeof (c) === "string") {
                                indx = $.inArray(c, headerXref);
                                if (indx >= 0) {
                                    row[indx] = d[r][c];
                                }
                            }
                        }
                        rows.push(row);
                    }
                    return [total, rows, headers];
                }
            },
            processAjaxOnInit: true,
            updateArrows: true,
            page: 0,
            size: 10,
            savePages: true,
            pageReset: 0,
            countChildRows: false,
        };
        var a = t.tablesorter({
            theme: "altair",
            widthFixed: !0,
            widgets: ["filter", ],
//            sortList: [[1, 0]],
//            sortReset: true,
//            sortRestart: true,
        }).tablesorterPager(n);
        $(".pagesize.ts_selectize").after('<div class="selectize_fix"></div>').selectize({
            hideSelected: !0,
            onDropdownOpen: function (e) {
                e.hide().velocity("slideDown", {
                    duration: 200,
                    easing: easing_swiftOut
                })
            },
            onDropdownClose: function (t) {
                t.show().velocity("slideUp", {
                    duration: 200,
                    easing: easing_swiftOut
                }), $(".uk-tooltip").hide(), "undefined" != typeof selectizeObj && selectizeObj.data("selectize") && (selectizePage = selectizeObj[0].selectize, selectizePage.destroy(), $(".ts_gotoPage").next(".selectize_fix").remove(), setTimeout(function () {
                    e()
                }))
            }
        }), t.on("click", ".ts_remove_row", function (e) {
            e.preventDefault();
            var t = $(this);
            var url = t.attr('href');
            UIkit.modal.confirm("Yakin ingin menghapus '" + t.attr('data-name') + "'?", function () {
                $.ajax({
                    url: url,
                    method: 'post',
                    success: function (data) {
                        data = JSON.parse(data);
                        showNotify(data.message, data.status);
                        if (data.status == 'success') {
                            t.closest("tr").remove(), a.trigger("update")
                        }
                    }
                });
            }, {
                labels: {
                    Ok: "Hapus",
                    Cancel: "Batal"
                }
            })
        })
    },
};