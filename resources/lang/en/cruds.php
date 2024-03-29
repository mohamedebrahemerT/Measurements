<?php

return [
    'userManagement' => [
        'title'          => 'إدارةالمستخدم',
        'title_singular' => 'إدارةالمستخدم',
    ],
    'permission'     => [
        'title'          => ' الصلاحيات ',
        'title_singular' => ' صلاحية ',
        'fields'         => [
            'id'                => 'المعرف ',
            'id_helper'         => '',
            'title'             => 'العنوان',
            'title_helper'      => '',
            'created_at'        => 'أنشئت في',
            'created_at_helper' => '',
            'updated_at'        => 'تم التحديث في',
            'updated_at_helper' => '',
            'deleted_at'        => 'تم الحذف عند',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'مجموعات  المشرفين ',
        'title_singular' => 'مجموعات  المشرفين ',
        'fields'         => [
            'id'                 => ' المعرف ',
            'id_helper'          => '',
            'title'              => ' العنوان ',
            'title_helper'       => '',
            'permissions'        => ' الصلاحيات ',
            'permissions_helper' => '',
            'created_at'         => ' أنشئت في',
            'created_at_helper'  => '',
            'updated_at'         => 'تم التحديث في',
            'updated_at_helper'  => '',
            'deleted_at'         => 'تم الحذف عند',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'المستخدمين',
        'title_singular' => 'المستخدم',
        'fields'         => [
            'id'                       => 'المعرف ',
            'id_helper'                => '',
            'name'                     => 'الاسم ',
            'name_helper'              => '',
            'email'                    => 'البريد إلكتروني',
            'email_helper'             => '',
            'email_verified_at'        => 'تم التحقق من البريد الإلكتروني في',
            'email_verified_at_helper' => '',
            'password'                 => 'كلمة المرور',
            'password_helper'          => '',
            'roles'                    => ' مجموعات المشرفين ',
            'roles_helper'             => '',
            'remember_token'           => ' رقم تذكر التوكن',
            'remember_token_helper'    => '',
            'created_at'               => ' أنشئت في',
            'created_at_helper'        => '',
            'updated_at'               => 'تم التحديث في',
            'updated_at_helper'        => '',
            'deleted_at'               => 'تم الحذف عند',
            'deleted_at_helper'        => '',
        ],
    ],
    'category'       => [
        'title'          => 'الفئات',
        'title_singular' => 'فئة',
        'Measurement_id'=>'المقياس ',
        'fields'         => [
            'id'                => ' المعرف ',
            'id_helper'         => '',
            'name'              => 'الاسم ',
            'name_helper'       => '',
            'created_at'        => ' أنشئت في',
            'created_at_helper' => '',
            'updated_at'        => 'تم التحديث في',
            'updated_at_helper' => '',
            'deleted_at'        => 'تم الحذف عند',
            'deleted_at_helper' => '',
        ],
    ],
    'Measurement'       => [
        'title'          => ' المقاييس ',
        'title_singular' => ' مقياس ',
        'fields'         => [
            'id'                => ' المعرف ',
            'id_helper'         => '',
            'name'              => 'الاسم ',
            'name_helper'       => '',
            'created_at'        => ' أنشئت في',
            'created_at_helper' => '',
            'updated_at'        => 'تم التحديث في',
            'updated_at_helper' => '',
            'deleted_at'        => 'تم الحذف عند',
            'deleted_at_helper' => '',
        ],
    ],
    'question'       => [
        'title'          => ' الأسئلة',
        'title_singular' => 'سؤال',
        'fields'         => [
            'id'                   => ' المعرف ',
            'id_helper'            => '',
            'category'             => 'الفئة',
            'category_helper'      => '',
            'question_text'        => 'نص السؤال',
            'question_treatment'        => ' العلاج  ',
            'question_text_helper' => '',
            'question_treatment_helper' => '',
            'created_at'           => ' أنشئت في',
            'created_at_helper'    => '',
            'updated_at'           => 'تم التحديث في',
            'updated_at_helper'    => '',
            'deleted_at'           => 'تم الحذف عند',
            'deleted_at_helper'    => '',
        ],
    ],
    'option'         => [
        'title'          => 'خيارات',
        'title_singular' => 'خيار',
        'fields'         => [
            'id'                 => ' المعرف ',
            'id_helper'          => '',
            'question'           => 'السؤال',
            'question_helper'    => '',
            'option_text'        => 'نص الخيار',
            'option_text_helper' => '',
            'points'             => 'النقاط',
            'points_helper'      => '',
            'created_at'         => ' أنشئت في',
            'created_at_helper'  => '',
            'updated_at'         => 'تم التحديث في',
            'updated_at_helper'  => '',
            'deleted_at'         => 'تم الحذف عند',
            'deleted_at_helper'  => '',
        ],
    ],
    'result'         => [
        'title'          => 'النتائج',
        'title_singular' => 'النتائج',
        'fields'         => [
            'id'                  => ' المعرف ',
            'id_helper'           => '',
            'user'                => 'مستخدم ',
            'user_helper'         => '',
            'total_points'        => 'مجمل النقاط',
            'total_points_helper' => '',
            'questions'           => 'الاسئلة',
            'questions_helper'    => '',
            'created_at'          => ' أنشئت في',
            'created_at_helper'   => '',
            'updated_at'          => 'تم التحديث في',
            'updated_at_helper'   => '',
            'deleted_at'          => 'تم الحذف عند',
            'deleted_at_helper'   => '',
        ],
    ],
];
