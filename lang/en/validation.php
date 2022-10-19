<?php
/**
 * This file is part of the "Volunteers CRM" project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Andrey Helldar <helldar@dragon-code.pro>
 * @copyright 2022 Andrey Helldar
 * @license MIT
 *
 * @see https://github.com/volunteers-crm
 */

return [
    'accepted'             => 'This field must be accepted.',
    'accepted_if'          => 'This field must be accepted when :other is :value.',
    'active_url'           => 'This field is not a valid URL.',
    'after'                => 'This field must be a date after :date.',
    'after_or_equal'       => 'This field must be a date after or equal to :date.',
    'alpha'                => 'This field must only contain letters.',
    'alpha_dash'           => 'This field must only contain letters, numbers, dashes and underscores.',
    'alpha_num'            => 'This field must only contain letters and numbers.',
    'array'                => 'This field must be an array.',
    'attached'             => 'This field is already attached.',
    'before'               => 'This field must be a date before :date.',
    'before_or_equal'      => 'This field must be a date before or equal to :date.',
    'between'              => [
        'array'   => 'This field must have between :min and :max items.',
        'file'    => 'This field must be between :min and :max kilobytes.',
        'numeric' => 'This field must be between :min and :max.',
        'string'  => 'This field must be between :min and :max characters.',
    ],
    'boolean'              => 'This field must be true or false.',
    'confirmed'            => 'This field confirmation does not match.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'This field is not a valid date.',
    'date_equals'          => 'This field must be a date equal to :date.',
    'date_format'          => 'This field does not match the format :format.',
    'declined'             => 'This field must be declined.',
    'declined_if'          => 'This field must be declined when :other is :value.',
    'different'            => 'This field and :other must be different.',
    'digits'               => 'This field must be :digits digits.',
    'digits_between'       => 'This field must be between :min and :max digits.',
    'dimensions'           => 'This field has invalid image dimensions.',
    'distinct'             => 'This field has a duplicate value.',
    'doesnt_end_with'      => 'This field may not end with one of the following: :values.',
    'doesnt_start_with'    => 'This field may not start with one of the following: :values.',
    'email'                => 'This field must be a valid email address.',
    'ends_with'            => 'This field must end with one of the following: :values.',
    'enum'                 => 'The selected field is invalid.',
    'exists'               => 'The selected field is invalid.',
    'file'                 => 'This field must be a file.',
    'filled'               => 'This field must have a value.',
    'gt'                   => [
        'array'   => 'This field must have more than :value items.',
        'file'    => 'This field must be greater than :value kilobytes.',
        'numeric' => 'This field must be greater than :value.',
        'string'  => 'This field must be greater than :value characters.',
    ],
    'gte'                  => [
        'array'   => 'This field must have :value items or more.',
        'file'    => 'This field must be greater than or equal to :value kilobytes.',
        'numeric' => 'This field must be greater than or equal to :value.',
        'string'  => 'This field must be greater than or equal to :value characters.',
    ],
    'image'                => 'This field must be an image.',
    'in'                   => 'The selected field is invalid.',
    'in_array'             => 'This field does not exist in :other.',
    'integer'              => 'This field must be an integer.',
    'ip'                   => 'This field must be a valid IP address.',
    'ipv4'                 => 'This field must be a valid IPv4 address.',
    'ipv6'                 => 'This field must be a valid IPv6 address.',
    'json'                 => 'This field must be a valid JSON string.',
    'lt'                   => [
        'array'   => 'This field must have less than :value items.',
        'file'    => 'This field must be less than :value kilobytes.',
        'numeric' => 'This field must be less than :value.',
        'string'  => 'This field must be less than :value characters.',
    ],
    'lte'                  => [
        'array'   => 'This field must not have more than :value items.',
        'file'    => 'This field must be less than or equal to :value kilobytes.',
        'numeric' => 'This field must be less than or equal to :value.',
        'string'  => 'This field must be less than or equal to :value characters.',
    ],
    'mac_address'          => 'This field must be a valid MAC address.',
    'max'                  => [
        'array'   => 'This field must not have more than :max items.',
        'file'    => 'This field must not be greater than :max kilobytes.',
        'numeric' => 'This field must not be greater than :max.',
        'string'  => 'This field must not be greater than :max characters.',
    ],
    'max_digits'           => 'This field must not have more than :max digits.',
    'mimes'                => 'This field must be a file of type: :values.',
    'mimetypes'            => 'This field must be a file of type: :values.',
    'min'                  => [
        'array'   => 'This field must have at least :min items.',
        'file'    => 'This field must be at least :min kilobytes.',
        'numeric' => 'This field must be at least :min.',
        'string'  => 'This field must be at least :min characters.',
    ],
    'min_digits'           => 'This field must have at least :min digits.',
    'multiple_of'          => 'This field must be a multiple of :value.',
    'not_in'               => 'The selected field is invalid.',
    'not_regex'            => 'This field format is invalid.',
    'numeric'              => 'This field must be a number.',
    'password'             => [
        'letters'       => 'This field must contain at least one letter.',
        'mixed'         => 'This field must contain at least one uppercase and one lowercase letter.',
        'numbers'       => 'This field must contain at least one number.',
        'symbols'       => 'This field must contain at least one symbol.',
        'uncompromised' => 'The given field has appeared in a data leak. Please choose a different field.',
    ],
    'present'              => 'This field must be present.',
    'prohibited'           => 'This field is prohibited.',
    'prohibited_if'        => 'This field is prohibited when :other is :value.',
    'prohibited_unless'    => 'This field is prohibited unless :other is in :values.',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'This field format is invalid.',
    'relatable'            => 'This field may not be associated with this resource.',
    'required'             => 'This field is required.',
    'required_array_keys'  => 'This field must contain entries for: :values.',
    'required_if'          => 'This field is required when :other is :value.',
    'required_if_accepted' => 'This field is required when :other is accepted.',
    'required_unless'      => 'This field is required unless :other is in :values.',
    'required_with'        => 'This field is required when :values is present.',
    'required_with_all'    => 'This field is required when :values are present.',
    'required_without'     => 'This field is required when :values is not present.',
    'required_without_all' => 'This field is required when none of :values are present.',
    'same'                 => 'This field and :other must match.',
    'size'                 => [
        'array'   => 'This field must contain :size items.',
        'file'    => 'This field must be :size kilobytes.',
        'numeric' => 'This field must be :size.',
        'string'  => 'This field must be :size characters.',
    ],
    'starts_with'          => 'This field must start with one of the following: :values.',
    'string'               => 'This field must be a string.',
    'timezone'             => 'This field must be a valid timezone.',
    'unique'               => 'This field has already been taken.',
    'uploaded'             => 'This field failed to upload.',
    'url'                  => 'This field must be a valid URL.',
    'uuid'                 => 'This field must be a valid UUID.',
    'attributes'           => [
        'address'                  => 'address',
        'age'                      => 'age',
        'amount'                   => 'amount',
        'area'                     => 'area',
        'available'                => 'available',
        'birthday'                 => 'birthday',
        'body'                     => 'body',
        'city'                     => 'city',
        'content'                  => 'content',
        'country'                  => 'country',
        'created_at'               => 'created at',
        'creator'                  => 'creator',
        'current_password'         => 'current password',
        'date'                     => 'date',
        'date_of_birth'            => 'date of birth',
        'day'                      => 'day',
        'deleted_at'               => 'deleted at',
        'description'              => 'description',
        'district'                 => 'district',
        'duration'                 => 'duration',
        'email'                    => 'email',
        'excerpt'                  => 'excerpt',
        'filter'                   => 'filter',
        'first_name'               => 'first name',
        'gender'                   => 'gender',
        'group'                    => 'group',
        'hour'                     => 'hour',
        'image'                    => 'image',
        'last_name'                => 'last name',
        'lesson'                   => 'lesson',
        'line_address1'            => 'Line Address 1',
        'line_address2'            => 'Line Address 2',
        'line_address_1'           => 'line address 1',
        'line_address_2'           => 'line address 2',
        'message'                  => 'message',
        'middle_name'              => 'middle name',
        'minute'                   => 'minute',
        'mobile'                   => 'mobile',
        'month'                    => 'month',
        'name'                     => 'name',
        'national_code'            => 'national code',
        'number'                   => 'number',
        'password'                 => 'password',
        'password_confirmation'    => 'password confirmation',
        'phone'                    => 'phone',
        'photo'                    => 'photo',
        'postal_code'              => 'postal code',
        'price'                    => 'price',
        'province'                 => 'province',
        'recaptcha_response_field' => 'recaptcha response field',
        'remember'                 => 'remember',
        'restored_at'              => 'restored at',
        'result_text_under_image'  => 'result text under image',
        'role'                     => 'role',
        'second'                   => 'second',
        'sex'                      => 'sex',
        'short_text'               => 'short text',
        'size'                     => 'size',
        'state'                    => 'state',
        'street'                   => 'street',
        'student'                  => 'student',
        'subject'                  => 'subject',
        'teacher'                  => 'teacher',
        'terms'                    => 'terms',
        'test_description'         => 'test description',
        'test_locale'              => 'test locale',
        'test_name'                => 'test name',
        'text'                     => 'text',
        'time'                     => 'time',
        'title'                    => 'title',
        'updated_at'               => 'updated at',
        'username'                 => 'username',
        'year'                     => 'year',
    ],
    'custom'               => [
        'attribute_name' => [
            'rule_name' => 'custom-message',
        ],
    ],
];
