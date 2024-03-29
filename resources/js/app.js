import './bootstrap';
function reapplyJavaScript() {
    let currentStep = 1;
    var ownerCount = 1;

    var stripe = null;
    var cardElement = null;
    // if (typeof stripeKey === 'undefined') {
        // const stripe = Stripe(stripeKey);
        // console.log('going to mound stripe', typeof stripe)
        // const elements = stripe.elements();
        // const cardElement = elements.create('card');
        // cardElement.mount('#card-element');
    // }

    function updateUrlParam(elementId, paramName, paramsToRemove) {
        loaderHandler(true)
        // Retrieve the value from the specified element
        var paramValue = $('#' + elementId).val();

        // Get the current URL
        var url = window.location.href;
        var queryStringStartIndex = url.indexOf('?');
        var baseUrl = queryStringStartIndex !== -1 ? url.slice(0, queryStringStartIndex) : url;
        var queryString = queryStringStartIndex !== -1 ? url.slice(queryStringStartIndex + 1) : '';

        // Parse the query string into an object
        var params = {};
        queryString.split('&').forEach(function (param) {
            var keyValue = param.split('=');
            var key = decodeURIComponent(keyValue[0]);
            var value = keyValue.length > 1 ? decodeURIComponent(keyValue[1]) : '';
            if (!params[key]) {
                params[key] = [];
            }
            params[key].push(value);
        });

        // Remove specified parameters from the object
        if (paramsToRemove && paramsToRemove.length > 0) {
            paramsToRemove.forEach(function (param) {
                delete params[param];
            });
        }

        // Set the new parameter value
        params[paramName] = [paramValue];

        // Construct the new query string
        var newQueryString = Object.keys(params)
            .map(function (key) {
                return params[key].map(function (value) {
                    return encodeURIComponent(key) + '=' + encodeURIComponent(value);
                }).join('&');
            })
            .join('&');

        // Construct the new URL
        var newUrl = baseUrl + (newQueryString ? '?' + newQueryString : '');
        newUrl = newUrl.replace("?=&", '?');

        // Reload the page with the modified URL
        history.pushState(null, null, newUrl);

        $.ajax({
            url: newUrl, // Specify your server route here
            method: 'GET',
            data: {}, // Send selected value as parameter
            success: function (response) {
                console.log(typeof response)
                // Update HTML content with data received from server

                // document.open();
                // document.write(response);
                // document.close();

                var responseString = response.toString();

                // Find the index of the start and end of the body content
                var startIndex = responseString.indexOf('<body class="antialiased relative bg-[#f5f8fa]">');
                var endIndex = responseString.indexOf('</body>');

                // Extract the body content
                var newBodyHtml = responseString.substring(startIndex + 36, endIndex);
                $('body').html(newBodyHtml);

                reapplyJavaScript();
                $('select').select2();
                loaderHandler(false)
            },
            error: function (xhr, status, error) {
                // Handle errors
                console.error(error);
            }
        });

        // window.location.href = newUrl;
    }

    function renderStepHandler(step) {
        $('[id^=step-]').hide();
        $('#step-' + step + '-wrapper').show();
    }

    function renderThankyouStepHandler() {
        $('[id^=step-]').hide();
        $('#form_area').remove();
        $('#bottomDiv').remove();
        $('#thank_you_page').show();

        var url = window.location.href;
        var queryStringStartIndex = url.indexOf('?');
        var baseUrl = queryStringStartIndex !== -1 ? url.slice(0, queryStringStartIndex) : url;
        history.pushState(null, null, baseUrl);
    }

    renderStepHandler(currentStep)

    function step1Validation() {
        var countryId = $('#country_id').val();
        var stateId = $('#state_id').val();
        var serviceId = $('#service_id').val();
        var serviceType = $('#serviceTypeDropdown').val();
        var numberOfShareholders = $('#numberOfShareholders').val();
        var processingTypeRadio = $('.processing-type-radio:checked').length;
        //var socialId = $('#social_id').val();

        // if (!socialId) {
        //     $("#social_error_msg").show();
        //     showToast('How you know about us is required');
        //     return false;
        // } else $("#social_error_msg").hide();
        if (!numberOfShareholders) {
            $("#shareholder_error_msg").show();
            showToast('shareholder number is required');
            return false;
        } else $("#shareholder_error_msg").hide();
        if (!countryId) {
            $("#country_error_msg").show();
            showToast('Country is required');
            return false;
        } else $("#country_error_msg").hide();
        if (!serviceId) {
            $("#service_error_msg").show();
            showToast('Type of service is required');
            return false;
        } else $("#service_error_msg").hide();
        if (!stateId && $('#country_id').data('show_states') == '1') {
            $("#state_error_msg").show();
            showToast('State is required');
            return false;
        } else $("#state_error_msg").hide();
        if (!serviceType && $('#service_id').data('have_type') == 'yes') {
            $("#type_error_msg").show();
            showToast('Corporation Type is required');
            return false;
        } else $("#type_error_msg").hide();

        // Check if all required fields have valid values
        return true;
    }

    function step2Validation() {
        var proposalName1 = $('#proposalName1').val();

        var billing_name = $('#billing_name').val();
        var billing_email = $('#billing_email').val();
        var billing_personal_number = $('#billing_personal_number').val();
        var billing_address1 = $('#billing_address1').val();
        var billing_city = $('#billing_city').val();
        var billing_country = $('#billing_country').val();
        var billing_zipcode = $('#billing_zipcode').val();
        var billing_state = $('#billing_state').val();

        if (!proposalName1) {
            $("#proposalName1_error_msg").show();
            showToast('Company proposed name is required');
            return false;
        }

        if (!validateShareholders()) {
            showToast('Shareholder data are missing');
            return false;
        }
        // if (!validateBeneficialOwners()) {
        //     showToast('Beneficial owner fields are missing');
        //     return false;
        // }

        if (!billing_name) {
            $("#billing_name_error_msg").show();
            showToast('Billing name is required');
            return false;
        }
        if (!billing_email) {
            $("#billing_email_error_msg").show();
            showToast('Billing email is required.');
            return false;
        }
        if (!isValidEmail(billing_email)) {
            $("#billing_email_error_msg").show();
            showToast('Billing email is not valid.');
            return false;
        }
        if (!billing_personal_number) {
            $("#billing_personal_number_error_msg").show();
            showToast('Billing personal_number is required.');
            return false;
        }
        if (!billing_address1) {
            $("#billing_address1_error_msg").show();
            showToast('Billing address1 is required.');
            return false;
        }
        if (!billing_city) {
            $("#billing_city_error_msg").show();
            showToast('Billing city is required.');
            return false;
        }
        if (!billing_country) {
            $("#billing_country_error_msg").show();
            showToast('Billing country is required.');
            return false;
        }
        if (!billing_zipcode) {
            $("#billing_zipcode_error_msg").show();
            showToast('Billing zipcode is required.');
            return false;
        }
        if (!billing_state) {
            $("#billing_state_error_msg").show();
            showToast('Billing State is required.');
            return false;
        }

        // Check if all required fields have valid values
        if (proposalName1 && proposalName3 && proposalName3 && validateShareholders()) {
            return true; // All fields are valid
        } else {
            return false; // One or more fields are missing or invalid
        }
    }

    function isValidEmail(email) {
        // Regular expression for validating email addresses
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    function validateShareholders() {
        var totalPercentage = 0;

        // Iterate over each shareholder
        $('[name^="shareholder_name"]').each(function (index) {
            var fullName = $(this).val();
            var percentage = parseInt($('#shareholder_percentage' + (index + 1)).val());

            // Validate full name
            if (fullName.trim() === '') {
                $("#shareholder_name_" + (index + 1) + "_error_msg").show();
                return false; // Stop iteration
            } else {
                $("#shareholder_name_" + (index + 1) + "_error_msg").hide();
            }

            // Validate percentage
            if (isNaN(percentage) || percentage < 0 || percentage > 100) {
                $("#shareholder_percentage_" + (index + 1) + "_error_msg").show();
                return false; // Stop iteration
            }

            totalPercentage += percentage;
        });
        console.log('totalPercentage', totalPercentage)

        // Check if the sum of percentages is equal to 100
        if (totalPercentage !== 100) {
            $('[name^="shareholder_name"]').each(function (index) {
                $("#shareholder_percentage_" + (index + 1) + "_error_msg").html('The total percentage must be equal to 100').show();
            });
            return false;
        }

        // All data is valid
        return true;
    }

    function generateShareholders() {
        // Get the number of shareholders from the numberOfShareholders field
        var numberOfShareholders = parseInt($('#numberOfShareholders').val());

        // Clear existing content in the shareholders_wrapper
        $('#shareholders_wrapper').empty();
        $('#shareholders_preview_wrapper').empty();

        // Generate HTML content for each shareholder
        for (var i = 1; i <= numberOfShareholders; i++) {
            var html = `
            <div class="inline-flex items-center justify-center w-full mb-6 mt-8">
                <hr class="w-64 h-1 bg-gray-200 border-0 rounded dark:bg-gray-700">
                <div class="absolute px-4 -translate-x-1/2 bg-[#DA0000] left-1/2 dark:bg-gray-900">
                    Shareholder # ${i}
                </div>
            </div>
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-x-10 gap-y-4">
                <div class="flex flex-col space-y-1">
                    <label class="font-sans text-sm font-normal text-[#3F4254]">Full Name</label>
                    <input type="text" name="shareholder_name${i}" id="shareholder_name${i}"
                        class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#DA0000] sm:text-sm sm:leading-6"/>
                    <span id="shareholder_name_${i}_error_msg" class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 error-msg" style="display: none">
                        This Field is required!
                    </span>
                </div>
                <div class="flex flex-col space-y-1 w-full">
                    <label class="font-sans text-sm font-normal text-[#3F4254]">Nationality</label>
                    <div class="selectWrapper">
                        <select class="selectBox h-12 bg-[#FFFFFF99] text-black" id="shareholder_nationality${i}" name="shareholder_nationality${i}"><option></option>`;
                        // Loop through countriesAll to generate options
                        countriesAll.forEach(function (country) {
                            html += `<option value="${country.name}">${country.name}</option>`;
                        });
            html += `
                        </select>
                        <span id="shareholder_nationality_${i}_error_msg" class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 error-msg" style="display: none">
                            This Field is required!
                        </span>
                    </div>
                </div>
                <div class="flex flex-col space-y-1">
                    <label class="font-sans text-sm font-normal text-[#3F4254]">Percentage</label>
                    <input type="number" name="shareholder_percentage${i}" id="shareholder_percentage${i}"
                        class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#DA0000] sm:text-sm sm:leading-6"/>
                        <span id="shareholder_percentage_${i}_error_msg" class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 error-msg" style="display: none">
                            Please enter a valid percentage (between 0 and 100)
                        </span>
                </div>
                <div class="flex flex-col space-y-1 w-full">
                    <label class="font-sans text-sm font-normal">Position</label>
                    <div class="selectWrapper">
                        <select class="selectBox h-12 bg-[#FFFFFF99] text-black" id="shareholder_position${i}" name="shareholder_position${i}"><option></option>`;
                        // Loop through countriesAll to generate options
                        positions.forEach(function (position) {
                            html += `<option value="${position.id}">${position.name}</option>`;
                        });
            html += `
                        </select>
                        <span id="shareholder_position_${i}_error_msg" class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 error-msg" style="display: none">
                            This Field is required!
                        </span>
                    </div>
                </div>
            </div>
        `;
            // Append the HTML content to the shareholders_wrapper
            $('#shareholders_wrapper').append(html);

            $('select').select2();

            let previewHtml = `<div class="col-span-6 bg-[#F6F6F699] rounded-md p-4">
                <p class='font-sans font-medium text-[10px] text-[#343434]'>Full Name:</p>
                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5' id="preview_shareholder_name${i}">-</p>

                <p class='font-sans font-medium text-[10px] text-[#343434] mt-4'>Nationality:</p>
                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5' id="preview_shareholder_nationality${i}">-</p>

                <p class='font-sans font-medium text-[10px] text-[#343434] mt-4'>Percentage:</p>
                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5' id="preview_shareholder_percentage${i}">-</p>

                <p class='font-sans font-medium text-[10px] text-[#343434] mt-4'>Position:</p>
                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5' id="preview_shareholder_position${i}">-</p>
            </div>`;
            $('#shareholders_preview_wrapper').append(previewHtml);
        }
    }

    function addBeneficialOwner() {
        var newOwner = `
            <div id="beneficial_owner_${ownerCount}_wrapper">
                <div class="inline-flex items-center justify-center w-full mb-6 mt-8">
                    <hr class="w-64 h-1 bg-gray-200 border-0 rounded dark:bg-gray-700">
                    <div class="absolute px-4 -translate-x-1/2 bg-[#DA0000] left-1/2 dark:bg-gray-900">
                        Beneficial Owner # ${ownerCount}
                    </div>
                </div>

                <div class="grid lg:grid-cols-2 grid-cols-1 gap-x-10 gap-y-4">
                    <div class="flex flex-col space-y-1">
                        <label class="font-sans text-sm font-normal text-[#3F4254]">
                            Full Name
                        </label>
                        <input type="text" name="beneficial_name${ownerCount}" id="beneficial_name${ownerCount}"
                               class="block w-full rounded-md bg-[#F6F6F699] border-0 h-12 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#DA0000] sm:text-sm sm:leading-6"/>

                        <span id="beneficial_name_${ownerCount}_error_msg" class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 error-msg" style="display: none">
                            This Field is required!
                        </span>

                    </div>
                    <div class="flex flex-col space-y-1">
                        <label class="font-sans text-sm font-normal text-[#3F4254]">
                            Nationality
                        </label>
                        <div class="flex items-center space-x-4">
                            <div class="selectWrapper w-full">
                                <select class="selectBox h-12 bg-[#FFFFFF99] text-black" name="beneficial_nationality${ownerCount}" id="beneficial_nationality${ownerCount}">
                                    <option></option>`;
                                        countriesAll.forEach(function (country) {
                                            newOwner += `<option value="${country.name}">${country.name}</option>`;
                                        });

                                        newOwner += `
                                </select>
                                <span id="beneficial_nationality_${ownerCount}_error_msg" class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1 error-msg" style="display: none">
                                    This Field is required!
                                </span>
                            </div>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="remove-beneficial-owner">
                            <path d="M3 3L13 13M3 13L13 3" stroke="#FFFFFF" stroke-width="1.6" stroke-linecap="square"/>
                            </svg>

                        </div>
                    </div>
                </div>
            </div>
        `;

        // Append the new owner HTML to the beneficial_owner_wrapper
        $('#beneficial_owner_wrapper').append(newOwner);
        $('#number_of_beneficial_owners').val(ownerCount);

        renderBeneficialPreview();
        // let previewHtml = `<div class="col-span-6 bg-[#F6F6F699] rounded-md p-4" id="beneficial_preview_single${ownerCount}">
        //             <p class='font-sans font-medium text-[10px] text-[#343434]'>Full Name:</p>
        //             <p class='font-sans font-medium text-sm text-[#343434] pt-1.5' id="preview_beneficial_name${ownerCount}">-</p>
        //
        //             <p class='font-sans font-medium text-[10px] text-[#343434] mt-4'>Nationality:</p>
        //             <p class='font-sans font-medium text-sm text-[#343434] pt-1.5' id="preview_beneficial_nationality${ownerCount}">-</p>
        //         </div>`;
        // $('#beneficial_preview_wrapper').append(previewHtml);

        // Increment owner count
        ownerCount++;
        $('select').select2();
    }

    addBeneficialOwner();

    function validateBeneficialOwners() {
        var isValid = true;

        // Check if at least one beneficial owner is added
        if ($('#beneficial_owner_wrapper > div').length === 0) {
            showToast('At least one beneficial owner must be added')
            // alert('At least one beneficial owner must be added');
            isValid = false;
            return isValid;

        }

        // Validate each beneficial owner
        $('#beneficial_owner_wrapper > div').each(function (index) {
            var fullName = $(this).find('input[name*="beneficial_name' + (index + 1) + '"]').val();
            var nationality = $(this).find('.selectBox').val();

            // Check if full name is empty
            if (fullName.trim() === '') {
                $("#beneficial_name_" + (index + 1) + "_error_msg").show();
                // alert('Please enter full name for Beneficial Owner #' + (index + 1));
                isValid = false;
                return false; // Stop iteration
            }

            // Check if nationality is selected
            if (nationality === null) {
                $("#beneficial_nationality_" + (index + 1) + "_error_msg").show();
                // alert('Please select nationality for Beneficial Owner #' + (index + 1));
                isValid = false;
                return false; // Stop iteration
            }
        });

        return isValid;
    }

    function renderBeneficialPreview() {
        let previewHtml = ``;
        $('#beneficial_owner_wrapper > div').each(function (index) {
            var fullName = $(this).find('input[name*="beneficial_name' + (index + 1) + '"]').val();
            var nationality = $(this).find('.selectBox').val();

            previewHtml += `<div class="col-span-6 bg-[#F6F6F699] rounded-md p-4" id="beneficial_preview_single${index}">
                <p class='font-sans font-medium text-[10px] text-[#343434]'>Full Name:</p>
                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5' id="preview_beneficial_name${index}">${fullName}</p>

                <p class='font-sans font-medium text-[10px] text-[#343434] mt-4'>Nationality:</p>
                <p class='font-sans font-medium text-sm text-[#343434] pt-1.5' id="preview_beneficial_nationality${index}">${nationality}</p>
            </div>`;
        });
        $('#beneficial_preview_wrapper').html(previewHtml);
    }

    function showToast(msg = 'Please fill the required fields.', title = 'Validation failed!', type = 'warning') {
        new Notify({
            status: type,
            title: title,
            text: msg,
            position: 'top right',
            effect: 'slide',
            speed: 300, // animation speed
            autoclose: true,
            autotimeout: 3000
        })
    }

    function renderPreview(id, value) {
        $("#preview_" + id).html(value);

        if (id === 'numberOfShareholders') $("#numberOfShareholdersPreview").html(value);
        // if (id === 'social_id') $("#social_preview").html(value);
        if (id === 'proposalName1') $("#preview_proposal_name_1").html(value);
        if (id === 'proposalName2') $("#preview_proposal_name_2").html(value);
        if (id === 'proposalName3') $("#preview_proposal_name_3").html(value);
        // if (id === 'special_request') $("#preview_special_request").html(value);

        if (id === 'billing_name') $("#preview_billing_name").html(value);
        if (id === 'billing_email') $("#preview_billing_email").html(value);
        if (id === 'billing_personal_number') $("#preview_billing_personal_number").html(value);
        if (id === 'billing_address1') $("#preview_billing_address1").html(value);
        if (id === 'billing_address2') $("#preview_billing_address2").html(value);
        if (id === 'billing_country') $("#preview_billing_country").html(value);
        if (id === 'billing_state') $("#preview_billing_state").html(value);
        if (id === 'billing_city') $("#preview_billing_city").html(value);
        if (id === 'billing_zipcode') $("#preview_billing_zipcode").html(value);
    }

    function processStripePayment() {
        console.log('stripe is called');
        loaderHandler(true)
        let formData = $('#registerForm').serializeArray();
        let postData = {};
        $.each(formData, function (index, field) {
            postData[field.name] = field.value;
        });

        // Create a Payment Method from the card element
        stripe.createPaymentMethod({
            type: 'card',
            card: cardElement,
        }).then(function (result) {
            if (result.error) {
                loaderHandler(false)
                showToast(result.error.message, 'Payment Failed!', 'error')
            } else {
                postData['stripe_payment_id'] = result.paymentMethod.id;

                // Make the AJAX request to the server
                $.ajax({
                    url: checkout_post_route,
                    method: 'POST',
                    data: postData,
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                })
                    .done(function (data) {
                        loaderHandler(false)
                        if (data.message) {
                            loaderHandler(false)
                            showToast('Your order has been placed!', 'Congratulations!', 'success')
                            renderThankyouStepHandler()
                            return true;
                        } else {
                            // Handle errors (if any)
                            if (data.errors) {
                                loaderHandler(false)
                                showToast('An unknown error occurred.', 'Order Failed!', 'error')
                                return false;
                            } else if (data.error) {
                                loaderHandler(false)
                                showToast(data.error, 'Payment Failed!', 'error')
                                return false;
                            } else {
                                loaderHandler(false)
                                showToast('An unknown error occurred.', 'Order Failed!', 'error')
                                return false;
                            }
                        }
                    })
                    .fail(function (error) {
                        loaderHandler(false)
                        showToast('An unknown error occurred.', 'Validation Failed!', 'error')
                        return false;
                    });
            }
        });

        return true;
    }

    function processBankPayment() {
        loaderHandler(true)
        let transaction_id = $("#transaction_id").val()
        if (!transaction_id) {
            loaderHandler(false)
            showToast('Transaction id is required.');
            return false;
        };

        let formData = $('#registerForm').serializeArray();
        let postData = {};
        $.each(formData, function (index, field) {
            postData[field.name] = field.value;
        });
        postData['transaction_id'] = transaction_id;

        // AJAX POST request
        $.ajax({
            url: checkout_post_route,
            method: 'POST',
            data: postData,
            dataType: 'json',
            success: function (response) {
                // Handle success response
                loaderHandler(false)
                showToast('Your order has been placed!', 'Congratulations!', 'success')
                renderThankyouStepHandler()
            },
            error: function (jqXHR, textStatus, errorThrown) {
                loaderHandler(false)
                // Handle error response
                showToast(jqXHR.responseJSON.message, 'Order Failed!', 'error')
            }
        });
    }

    function renderStepProgressHandler(currentStep) {
        let previousStep = currentStep - 1;
        $("#progress-step-" + previousStep).removeClass('bg-gray-200 text-[#DA0000] border-[#8E5D0B] border-2 font-bold').addClass('bg-[#DA0000] completed text-white border-2')
        $("#progress-step-" + currentStep).addClass('bg-gray-200 text-[#DA0000] border-[#DA0000] border-2 font-bold current').removeClass('bg-[#8E5D0B] bg-white').closest('a').removeClass('cursor-not-allowed')

        // Mobile view progress
        $("#progress-step-" + previousStep +'-mobile').addClass('bg-[#DA0000] completed')
        $("#progress-step-" + currentStep +'-mobile').addClass('bg-[#8E5D0B] current').removeClass('bg-[#D3BEA9] border border-[#C3B09B]').find('span').first().removeClass('text-[#C3B09B]').addClass('text-white')
    }

    function loaderHandler(bool) {
        bool ? $("#loader").show() : $("#loader").hide()
    }

    function moundStripeElement() {
        stripe = Stripe(stripeKey);
        console.log('going to mound stripe', typeof stripe)
        const elements = stripe.elements();
        cardElement = elements.create('card');
        cardElement.mount('#card-element');
    }

    $(document).ready(function () {



        generateShareholders();
        loaderHandler(false)

        $('#countryDropdown').change(function () {
            updateUrlParam('countryDropdown', 'country', ['state', 'service']);
        });

        $('#stateDropdown').change(function () {
            updateUrlParam('stateDropdown', 'state');
        });

        $('#serviceDropdown').change(function () {
            updateUrlParam('serviceDropdown', 'service', ['type']);
        });

        $('#serviceTypeDropdown').change(function () {
            updateUrlParam('serviceTypeDropdown', 'type');
        });

        $('.processing-type-radio').change(function () {
            // Get the amount from the data attribute
            let additionalAmount = 0;
            var additionalServiceValues = $("#additionalServicesDropdown").val();
            additionalServiceValues.forEach(function (value) {
                // Find the additional service object with the corresponding id
                var additionalService = additionalServicesData.find(function (service) {
                    return service.id == value;
                });

                additionalAmount += parseInt(additionalService.amount);
            });
            var amount = $(this).data('amount');
            $(".total_pay_amount_summary").html(parseInt(state_amount) + parseInt(amount) + parseInt(additionalAmount));
            $("#processing_type_amount_preview").html(parseInt(amount));


            // Log the amount to the console
            $(".processing-type-radio-summary").html(amount);
        });

        $('#additionalServicesDropdown').change(function () {
            // Clear the existing content in the container
            $('#additional_services_container').empty();

            // Get the selected values from the dropdown
            var selectedValues = $(this).val();

            $("#additional_services").val(selectedValues)

            if (selectedValues.length)
                $("#additional_services_wrapper").show();
            else
                $("#additional_services_wrapper").hide();


            let total_am = parseInt($('.processing-type-radio:checked').data('amount')) + parseInt(state_amount);
            let additional_amount = 0;
            // Loop through the selected values
            selectedValues.forEach(function (value) {
                // Find the additional service object with the corresponding id
                var additionalService = additionalServicesData.find(function (service) {
                    return service.id == value;
                });
                total_am = parseInt(total_am) + parseInt(additionalService.amount);
                additional_amount += parseInt(additionalService.amount);

                $(".total_pay_amount_summary").html(total_am);
                $("#additional_services_preview").html(additional_amount);
                $("#additional_services_preview_box").show();

                // If additional service is found, create HTML element
                if (additionalService) {
                    // Generate HTML for the additional service
                    var html = '<div class="flex items-center justify-between mt-2 border-b border-[#1A1A1A] pb-1">';
                    html += '<p class="font-sans text-xs font-bold text-[#292929]">' + additionalService.name + '</p>';
                    html += '<p class="font-sans text-sm font-medium text-[#292929]">$' + additionalService.amount + '</p>';
                    html += '</div>';

                    // Append the HTML to the container
                    $('#additional_services_container').append(html);
                }
            });
        });

        $('#numberOfShareholders').on('input', function () {
            var val = parseInt($(this).val());
            if (val < 1) {
                $(this).val(1);
            }
            $("#numberOfShareholdersSummary").html(val)
            $("#numberOfShareholdersPreview").html(val)
            generateShareholders();
        });

        $('.next').on('click', function (e) {
            e.preventDefault()

            if ($(this).hasClass('place-order')) {
                const payment_type = $('.payment_method_radio:checked').val();
                console.log(payment_type);

                if (payment_type && payment_type === 'online') {
                    if (processStripePayment())
                        currentStep = currentStep + 1;
                }

                if (payment_type && payment_type === 'bank') {
                    if (processBankPayment())
                        currentStep = currentStep + 1;
                }


            }

            if (currentStep < 4) {
                if (currentStep === 1 && !step1Validation()) {
                    return;
                }
                if (currentStep === 2 && !step2Validation()) {
                    return;
                }

                currentStep = currentStep + 1;
                if (currentStep === 2) $("#back").show();
                if (currentStep === 4) $(".next").text('Place Order').addClass('place-order');
                renderStepHandler(currentStep)

                $('select').select2();
            }

            if (currentStep === 4) {
                moundStripeElement()
                $("#registerForm").css('height','100%')
            }

            renderStepProgressHandler(currentStep)

            $('html, body').animate({ scrollTop: 0 }, 'slow');

            // if (currentStep === 4)
            //     currentStep = currentStep +1;
        });

        $('#back').on('click', function () {
            if (currentStep > 1) {
                currentStep = currentStep - 1;
                renderStepHandler(currentStep)
                $('select').select2();

                if (currentStep < 4) $(".next").text('Next').removeClass('place-order');
            }

            if (currentStep === 1) $("#back").hide();
        });

        $(document).on('click', '.remove-beneficial-owner', function () {
            $(this).parent().parent().parent().parent().remove();
            $('#number_of_beneficial_owners').val($('#beneficial_owner_wrapper > div').length);

            // Reset the owner count if there are no owners left
            if ($('#beneficial_owner_wrapper > div').length === 0) {
                ownerCount = 1;
            } else {
                // Update ownerCount for remaining owners
                $('#beneficial_owner_wrapper > div').each(function (index) {
                    var currentId = $(this).attr('id');
                    var currentCount = parseInt(currentId.split('_')[2]);
                    if (currentCount > index + 1) {
                        $(this).attr('id', `beneficial_owner_${index + 1}_wrapper`);
                        $(this).find('.absolute').text(`Beneficial Owner # ${index + 1}`);
                        $(this).find('.remove-beneficial-owner').attr('id', `remove_beneficial_owner_${index + 1}`);
                    }
                });
                ownerCount--;
            }

            // renderBeneficialPreview()
        });

        // Click event listener for add button
        $('.add-beneficial-owner').click(function () {
            addBeneficialOwner();
        });

        $(document).on('input', 'input, textarea', function () {
            var inputValue = $(this).val();
            var inputId = $(this).attr('id');
            var errorMsg = $(this).siblings('.error-msg');

            if (inputValue.trim() !== '') {
                // If input is not empty, hide the error message
                errorMsg.hide();
            } else {
                // If input is empty, show the error message
                errorMsg.show();
            }

            renderPreview(inputId, inputValue);
            // renderBeneficialPreview()
        });

        $(document).on('change', 'select', function () {
            var inputValue = $(this).val();
            var inputId = $(this).attr('id');
            var errorMsg = $(this).siblings('.error-msg');

            if (inputValue !== '') {
                // If input is not empty, hide the error message
                errorMsg.hide();
            } else {
                // If input is empty, show the error message
                errorMsg.show();
            }

            if (inputId.indexOf("shareholder_position") !== -1) {
                inputValue = $("#"+inputId+" option:selected").text();
            }
            renderPreview(inputId, inputValue);
            // renderBeneficialPreview()
        });

        $('.payment_method_radio').on('change', function () {
            // Get the value of the selected radio button
            var selectedValue = $(this).val();
            if (selectedValue === 'bank') {
                $("#bank_payment_method").show();
                $("#online_payment_method").hide();
            }

            if (selectedValue === 'online') {
                $("#bank_payment_method").hide();
                $("#online_payment_method").show();
            }
        });

        $('li[id^="progress-step"]').click(function() {
            alert('clicked');
        })
        $('[id^="progress-step"]').click(function() {
            // Your event handling code here
            let going_to_step = $(this).data('step');
            if ($("#progress-step-" + currentStep).hasClass('completed')) {
                if (currentStep < 4) {
                    if (currentStep === 1 && !step1Validation()) {
                        return;
                    }
                    if (currentStep === 2 && !step2Validation()) {
                        return;
                    }
                }
            }

            if ($(this).hasClass('completed') || $(this).hasClass('current')) {
                let step = $(this).data('step');
                currentStep = parseInt(step);
                renderStepHandler(currentStep)
                $('select').select2();
            }
        });
    });
}
reapplyJavaScript()
