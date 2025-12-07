/* ====== Index ======

1. Page Date (Breadcrumbs)
2. Revenue Overview

====== End ======*/
$(function () {
	"use strict";

	/*======== 1. Page Date (Breadcrumbs) ========*/
	if ($("#pagedate")) {
		var start = moment();
		var end = moment();
		var cb = function (start, end) {
			var start = moment(start); // pass your date obj here.
			var end = moment(end); // pass your date obj here.
			$("#pagedate .cr-date-range span").html(

				"<a href='javascript:void(0)' class='calendar' title='Date'><i class='ri-calendar-line'></i>" + start.format("jYYYY/jM/jD") + " - " + end.format("jYYYY/jM/jD") + "</a>"
			);
		};

		$("#pagedate .cr-date-range").daterangepicker(
			{
				startDate: start,
				endDate: end,
				opens: 'left',
				months: ['فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور', 'مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند'],
				ranges: {
					'امروز': [moment(), moment()],
					'دیروز': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
					'هفته گذشته': [moment().subtract(6, 'days'), moment()],
					'ماه گذشته': [moment().subtract(29, 'days'), moment()],
					'این ماه': [moment().startOf('month'), moment().endOf('month')],
					'ماه بعد': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
				},
				"locale": {
					"format": "YYYY/M/D",
					"separator": " - ",
					"applyLabel": "اعمال",
					"cancelLabel": "انصراف",
					"fromLabel": "از",
					"toLabel": "تا",
					"customRangeLabel": "سفارشی",
					"weekLabel": "هف",
					"daysOfWeek": [
						"ی",
						"د",
						"س",
						"چ",
						"پ",
						"ج",
						"ش"
					],
					"monthNames": [
						"ژانویه",
						"فوریه",
						"مارس",
						"آوریل",
						"می",
						"ژوئن",
						"جولای",
						"آگوست",
						"سپتامبر",
						"اکتبر",
						"نوامبر",
						"دسامبر"
					],
					"firstDay": 6
				}
			},
			cb
		);
		cb(start, end);
	}

	/*======== 2. Revenue Overview ========*/
	if ($(".revenue-overview")) {
		var start = moment().subtract(1, "days");
		var end = moment().subtract(1, "days");
		var cb = function (start, end) {
			$(".revenue-overview .cr-date-range span").html(
				start.format("jYYYY/jM/jD") + " - " + end.format("jYYYY/jM/jD")
			);
		};

		$(".revenue-overview .cr-date-range").daterangepicker(
			{
				startDate: start,
				endDate: end,
				opens: 'left',
				ranges: {
					'امروز': [moment(), moment()],
					'دیروز': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
					'هفته گذشته': [moment().subtract(6, 'days'), moment()],
					'ماه گذشته': [moment().subtract(29, 'days'), moment()],
					'این ماه': [moment().startOf('month'), moment().endOf('month')],
					'ماه بعد': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
				},
				"locale": {
					"format": "YYYY/M/D",
					"separator": " - ",
					"applyLabel": "اعمال",
					"cancelLabel": "انصراف",
					"fromLabel": "از",
					"toLabel": "تا",
					"customRangeLabel": "سفارشی",
					"weekLabel": "هف",
					"daysOfWeek": [
						"ی",
						"د",
						"س",
						"چ",
						"پ",
						"ج",
						"ش"
					],
					"monthNames": [
						"ژانویه",
						"فوریه",
						"مارس",
						"آوریل",
						"می",
						"ژوئن",
						"جولای",
						"آگوست",
						"سپتامبر",
						"اکتبر",
						"نوامبر",
						"دسامبر"
					],
					"firstDay": 6
				}
			},
			cb
		);
		cb(start, end);
	}

	/*======== 3. Map(index.blade.php), recent order(ecommerce.html), best seller(ecommerce.html),top product(ecommerce.html), Device user(analytics)  ========*/
	if ($("#fxmap, #ordertbl, #best_seller_tbl, #top_product_tbl, #deviceUser")) {
		var start = moment();
		var end = moment();
		var cb = function (start, end) {
			$("#fxmap .cr-date-range span, #ordertbl .cr-date-range span, #best_seller_tbl .cr-date-range span, #top_product_tbl .cr-date-range span, #deviceUser .cr-date-range span").html(

				"<a href='javascript:void(0)' class='calendar' title='Date'><i class='ri-equalizer-line'></i></a>"
			);
		};

		$("#fxmap .cr-date-range, #ordertbl .cr-date-range, #best_seller_tbl .cr-date-range, #top_product_tbl .cr-date-range, #deviceUser .cr-date-range").daterangepicker(
			{
				startDate: start,
				endDate: end,
				opens: 'left',
				ranges: {
					'امروز': [moment(), moment()],
					'دیروز': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
					'هفته گذشته': [moment().subtract(6, 'days'), moment()],
					'ماه گذشته': [moment().subtract(29, 'days'), moment()],
					'این ماه': [moment().startOf('month'), moment().endOf('month')],
					'ماه بعد': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
				},
				"locale": {
					"format": "YYYY/M/D",
					"separator": " - ",
					"applyLabel": "اعمال",
					"cancelLabel": "انصراف",
					"fromLabel": "از",
					"toLabel": "تا",
					"customRangeLabel": "سفارشی",
					"weekLabel": "هف",
					"daysOfWeek": [
						"ی",
						"د",
						"س",
						"چ",
						"پ",
						"ج",
						"ش"
					],
					"monthNames": [
						"ژانویه",
						"فوریه",
						"مارس",
						"آوریل",
						"می",
						"ژوئن",
						"جولای",
						"آگوست",
						"سپتامبر",
						"اکتبر",
						"نوامبر",
						"دسامبر"
					],
					"firstDay": 6
				}
			},
			cb
		);
		cb(start, end);
	}

	/*======== 4. Deal table ========*/
	if ($("#dealtbl")) {
		var start = moment();
		var end = moment();
		var cb = function (start, end) {
			$("#dealtbl .cr-date-range span").html(

				"<a href='javascript:void(0)' class='calendar' title='Date'><i class='ri-equalizer-line'></i></a>"
			);
		};

		$("#dealtbl .cr-date-range").daterangepicker(
			{
				startDate: start,
				endDate: end,
				opens: 'left',
				ranges: {
					'امروز': [moment(), moment()],
					'دیروز': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
					'هفته گذشته': [moment().subtract(6, 'days'), moment()],
					'ماه گذشته': [moment().subtract(29, 'days'), moment()],
					'این ماه': [moment().startOf('month'), moment().endOf('month')],
					'ماه بعد': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
				},
				"locale": {
					"format": "YYYY/M/D",
					"separator": " - ",
					"applyLabel": "اعمال",
					"cancelLabel": "انصراف",
					"fromLabel": "از",
					"toLabel": "تا",
					"customRangeLabel": "سفارشی",
					"weekLabel": "هف",
					"daysOfWeek": [
						"ی",
						"د",
						"س",
						"چ",
						"پ",
						"ج",
						"ش"
					],
					"monthNames": [
						"ژانویه",
						"فوریه",
						"مارس",
						"آوریل",
						"می",
						"ژوئن",
						"جولای",
						"آگوست",
						"سپتامبر",
						"اکتبر",
						"نوامبر",
						"دسامبر"
					],
					"firstDay": 6
				}
			},
			cb
		);
		cb(start, end);
	}

	/*======== 5. Deal table ========*/
	if ($("#campaigns")) {
		var start = moment();
		var end = moment();
		var cb = function (start, end) {
			$("#campaigns .cr-date-range span").html(

				"<a href='javascript:void(0)' class='calendar' title='Date'><i class='ri-equalizer-line'></i></a>"
			);
		};

		$("#campaigns .cr-date-range").daterangepicker(
			{
				startDate: start,
				endDate: end,
				opens: 'left',
				ranges: {
					امروز: [moment(), moment()],
					دیروز: [
						moment().subtract(1, "days"),
						moment().subtract(1, "days")
					],
					"7 روز گذشته": [moment().subtract(6, "days"), moment()],
					"30 روز گذشته": [moment().subtract(29, "days"), moment()],
					"این ماه": [moment().startOf("month"), moment().endOf("month")],
					"ماه گذشته": [
						moment()
							.subtract(1, "month")
							.startOf("month"),
						moment()
							.subtract(1, "month")
							.endOf("month")
					]
				},
				"locale": {
					"format": "YYYY/M/D",
					"separator": " - ",
					"applyLabel": "اعمال",
					"cancelLabel": "انصراف",
					"fromLabel": "از",
					"toLabel": "تا",
					"customRangeLabel": "سفارشی",
					"weekLabel": "هف",
					"daysOfWeek": [
						"ی",
						"د",
						"س",
						"چ",
						"پ",
						"ج",
						"ش"
					],
					"monthNames": [
						"ژانویه",
						"فوریه",
						"مارس",
						"آوریل",
						"می",
						"ژوئن",
						"جولای",
						"آگوست",
						"سپتامبر",
						"اکتبر",
						"نوامبر",
						"دسامبر"
					],
					"firstDay": 6
				}
			},
			cb
		);
		cb(start, end);
	}
	/*======== 6. Single date picker (create-project.html) ========*/
	$('input[name="deadline"]').daterangepicker({
		singleDatePicker: true,
		showDropdowns: true,
		minYear: 2022,
		maxYear: 2030,
	}, function (start, end, label) {
		var years = moment().diff(start, 'years');
		// alert("You are " + years + " years old!");
	});
});
