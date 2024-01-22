@extends('layouts.subpage')

@section('top-title','飼育費用は？')

@section('top-img')
<div class="price-wrap"></div>
@endsection


@section('contents')
    <div class="container price">
        <div class="row">
            <div class="col-md-12">
                <h3>飼育費用シュミレーション</h3>
                <p>ハムスターは可愛らしく癒しの存在ですが、事前に飼育にかかる費用を把握することは大切です。
                    <br>シュミレーションを利用して、ハムスターの飼育にかかる予想費用を簡単に見積もりましょう。
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="mitsumori-js">
                    <table class="mitsumori-js-tbl">
                        <thead>
                            <th>項目</th>
                            <th>種類</th>
                            <th>金額</th>
                        </thead>
                        <tbody>
                            <tr id="mitsumori-js-item-1" class="mitsumori-js-item" data-itemnum="1">
                                <td class="item-name">ケージ(初回のみ)</td>
                                <td class="item-quantity">
                                    <label><input type="radio" name="item-radio-1" class="radio-quantity" data-itemnum="1"
                                            value="3000">サイズS</label>
                                    <label><input type="radio" name="item-radio-1" class="radio-quantity" data-itemnum="1"
                                            value="4000">サイズM</label>
                                    <label><input type="radio" name="item-radio-1" class="radio-quantity" data-itemnum="1"
                                            value="5000">サイズL</label>
                                </td>
                                <td class="item-price">￥<span></span></td>
                            </tr>
                            <tr id="mitsumori-js-item-2" class="mitsumori-js-item" data-itemnum="2">
                                <td class="item-name">回し車(初回のみ)</td>
                                <td class="item-quantity">
                                    <label><input type="radio" name="item-radio-2" class="radio-quantity" data-itemnum="2"
                                            value="1000">サイズS</label>
                                    <label><input type="radio" name="item-radio-2" class="radio-quantity" data-itemnum="2"
                                            value="1500">サイズM</label>
                                    <label><input type="radio" name="item-radio-2" class="radio-quantity" data-itemnum="2"
                                            value="2000">サイズL</label>
                                </td>
                                <td class="item-price">￥<span></span></td>
                            </tr>
                            <tr id="mitsumori-js-item-3" class="mitsumori-js-item" data-itemnum="3">
                                <td class="item-name">ケージの床材</td>
                                <td class="item-quantity">
                                    <label><input type="radio" name="item-radio-3" class="radio-quantity" data-itemnum="3"
                                            value="1000">わたタイプ</label>
                                    <label><input type="radio" name="item-radio-3" class="radio-quantity" data-itemnum="3"
                                            value="2000">木タイプ</label>
                                </td>
                                <td class="item-price">￥<span></span></td>
                            </tr>
                            <tr id="mitsumori-js-item-4" class="mitsumori-js-item" data-itemnum="4">
                                <td class="item-name">ごはん</td>
                                <td class="item-quantity">
                                    <label><input type="radio" name="item-radio-4" class="radio-quantity" data-itemnum="4"
                                            value="500">ペットフードA(かりかりタイプ) </label>
                                    <label><input type="radio" name="item-radio-4" class="radio-quantity" data-itemnum="4"
                                            value="600">ペットフードB(ソフトタイプ) </label>
                                </td>
                                <td class="item-price">￥<span></span></td>
                            </tr>
                            <tr id="mitsumori-js-item-6" class="mitsumori-js-item" data-itemnum="6">
                                <td class="item-name">おやつ</td>
                                <td class="item-quantity">
                                    <label><input type="checkbox" class="check-quantity" data-itemnum="6"
                                            value="200">トウモロコシ</label>
                                    <label><input type="checkbox" class="check-quantity" data-itemnum="6"
                                            value="300">ひまわりの種</label>
                                </td>
                                <td class="item-price">￥<span></span></td>
                            </tr>
                            <tr id="mitsumori-js-item-8" class="mitsumori-js-item" data-itemnum="8">
                                <td class="item-name">ペット保険(月額)</td>
                                <td class="item-quantity">
                                    <label><input type="radio" name="item-radio-8" class="radio-quantity"
                                            data-itemnum="8" value="1500">加入する</label>
                                    <label><input type="radio" name="item-radio-8" class="radio-quantity"
                                            data-itemnum="8" value="0">加入しない</label>
                                </td>
                                <td class="item-price">￥<span></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="mitsumori-js-total-tbl" data-taxflg="1">
                        <tbody>
                            <tr>
                                <th>小計</th>
                                <td>￥<span id="mitsumori-js-subtotal"></span></td>
                            </tr>
                            <tr>
                                <th>消費税（<span id="mitsumori-js-tax-rate">10</span>%）</th>
                                <td>￥<span id="mitsumori-js-tax"></span></td>
                            </tr>
                            <tr>
                                <th>合計金額</th>
                                <td>￥<span id="mitsumori-js-total"></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


<script>
    "use strict";
    window.onload = function() {
        let type_text_quantity = document.querySelectorAll('#mitsumori-js .text-quantity');
        type_text_quantity.forEach((ele) => {
            ele.onkeyup = event => calcPrice(event);
            ele.onblur = event => calcPrice(event);
        });
        let type_radio_quantity = document.querySelectorAll('#mitsumori-js .radio-quantity');
        type_radio_quantity.forEach((ele) => {
            ele.onchange = event => calcPrice(event);
        });
        let type_check_quantity = document.querySelectorAll('#mitsumori-js .check-quantity');
        type_check_quantity.forEach((ele) => {
            ele.onchange = event => calcPrice(event);
        });
        let type_select_quantity = document.querySelectorAll('#mitsumori-js .select-quantity');
        type_select_quantity.forEach((ele) => {
            ele.onchange = event => calcPrice(event);
        });

        function calcPrice(event) {
            let subtotal = 0,
                tax = 0,
                itemNum = event.target.getAttribute('data-itemnum'),
                taxFlg = parseInt(document.querySelector('.mitsumori-js-total-tbl').getAttribute('data-taxflg')),
                items = document.querySelectorAll('.mitsumori-js-item');

            items.forEach((itemElem) => {
                if (itemElem.getAttribute('data-itemnum') == itemNum) {
                    if (event.target.classList.contains('text-quantity')) {
                        itemElem.querySelector('.item-price span').textContent = escapeHtml(event.target
                            .value) * escapeHtml(itemElem.querySelector('.unit-price').value);

                    } else if (event.target.classList.contains('radio-quantity')) {
                        itemElem.querySelector('.item-price span').textContent = escapeHtml(event.target
                            .value);

                    } else if (event.target.classList.contains('check-quantity')) {
                        let checkLabels = itemElem.querySelectorAll('.check-quantity');
                        let total = 0;
                        checkLabels.forEach((checkLabelElem) => {
                            if (checkLabelElem.checked) {
                                total += parseInt(escapeHtml(checkLabelElem.value));
                            }
                        });
                        itemElem.querySelector('.item-price span').textContent = total;

                    } else if (event.target.classList.contains('select-quantity')) {
                        itemElem.querySelector('.item-price span').textContent = escapeHtml(itemElem
                            .querySelector('.select-quantity').value);

                    }
                }
                if (itemElem.querySelector('.item-price span').textContent != '') {
                    subtotal += parseInt(itemElem.querySelector('.item-price span').textContent);
                }
            });

            if (taxFlg == 1) {

                tax = subtotal * (parseInt(document.querySelector('#mitsumori-js-tax-rate').textContent) / 100);
                tax = Math.floor(tax);
                document.querySelector('#mitsumori-js-subtotal').textContent = subtotal;
                document.querySelector('#mitsumori-js-tax').textContent = tax;
                document.querySelector('#mitsumori-js-total').textContent = subtotal + tax;
            } else {
                document.querySelector('#mitsumori-js-total').textContent = subtotal;
            }

            // お問い合わせフォームに埋め込む場合---------------------------------------------------
            // let outputContents = document.querySelectorAll('textarea.mitsumori-js-output');
            // outputContents.forEach(function(outputElem) {
            //     let outputHtml = '',
            //         mjItems = document.querySelectorAll('.mitsumori-js-item'),
            //         mjTotalItems = document.querySelectorAll('.mitsumori-js-total-tbl tr');
            //     mjItems.forEach(function(mjElem) {
            //         let txtItemName = mjElem.querySelector('.item-name').textContent,
            //             txtItemPrice = mjElem.querySelector('.item-price').textContent;
            //         if (mjElem.querySelector('.unit-price') != null) {
            //             let valUnitPrice = escapeHtml(mjElem.querySelector('.unit-price').value),
            //                 valTextQuantity = escapeHtml(mjElem.querySelector('.text-quantity')
            //                     .value);
            //             if (valUnitPrice != '' && valTextQuantity != '') {
            //                 outputHtml += txtItemName;
            //                 outputHtml += '（￥' + valUnitPrice + ' × ' + valTextQuantity + '）';
            //                 outputHtml += '： ' + txtItemPrice + '\n';
            //             }
            //         }
            //         if (mjElem.querySelector('.radio-quantity') != null) {
            //             let radioItems = mjElem.querySelectorAll('.radio-quantity');
            //             radioItems.forEach(function(radioElem) {
            //                 if (radioElem.checked) {
            //                     let txtRadioItemName = radioElem.parentNode.textContent,
            //                         valRadioQuantity = escapeHtml(radioElem.value);
            //                     if (valRadioQuantity != '') {
            //                         outputHtml += txtItemName;
            //                         outputHtml += '（' + txtRadioItemName + ' ￥' +
            //                             valRadioQuantity + '）';
            //                         outputHtml += '： ' + txtItemPrice + '\n';
            //                     }
            //                 }
            //             });
            //         }
            //         if (mjElem.querySelector('.check-quantity') != null) {
            //             let checkItems = mjElem.querySelectorAll('.check-quantity');
            //             let checkItemFlg = false,
            //                 checkItemContents = '';
            //             checkItems.forEach(function(checkElem) {
            //                 if (checkElem.checked) {
            //                     let txtCheckItemName = checkElem.parentNode.textContent,
            //                         valCheckQuantity = escapeHtml(checkElem.value);
            //                     if (valCheckQuantity != '') {
            //                         if (!checkItemFlg) {
            //                             checkItemContents += txtCheckItemName + '：￥' +
            //                                 valCheckQuantity;
            //                         } else {
            //                             checkItemContents += ', ' + txtCheckItemName +
            //                                 '：￥' + valCheckQuantity;
            //                         }
            //                     }
            //                     checkItemFlg = true;
            //                 }
            //             });
            //             if (checkItemFlg) {
            //                 outputHtml += txtItemName + '\n';
            //                 outputHtml += '（' + checkItemContents + '）\n';
            //                 outputHtml += '： ' + txtItemPrice + '\n';
            //             }
            //         }
            //         if (mjElem.querySelector('.select-quantity') != null) {
            //             let optItems = mjElem.querySelectorAll('.select-quantity option');
            //             optItems.forEach(function(optElem) {
            //                 if (optElem.selected) {
            //                     let txtOptName = optElem.textContent,
            //                         valOpt = escapeHtml(optElem.value);
            //                     if (valOpt != '') {
            //                         outputHtml += txtItemName;
            //                         outputHtml += '（' + txtOptName + ' ￥' + valOpt + '）';
            //                         outputHtml += '： ' + txtItemPrice + '\n';
            //                     }
            //                 }
            //             });
            //         }
            //     });
            //     outputHtml += '\n\n';
            //     mjTotalItems.forEach(function(mjtElem) {
            //         outputHtml += mjtElem.querySelector('th').textContent + mjtElem.querySelector(
            //             'td').textContent + '\n';
            //     });
            //     outputElem.textContent = outputHtml;
            // });
            // お問い合わせフォームに埋め込む場合---------------------------------------------------

        } // calcPrice関数ここまで

        function escapeHtml(str) {
            str = str.replace(/&/g, '&amp;');
            str = str.replace(/</g, '&lt;');
            str = str.replace(/>/g, '&gt;');
            str = str.replace(/"/g, '&quot;');
            str = str.replace(/'/g, '&#39;');
            return str;
        }
    }
</script>
