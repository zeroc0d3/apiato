<?php

namespace App\Containers\Authorization\UI\API\Requests;

use App\Port\Request\Abstracts\Request;

/**
 * Class ListAllPermissionsRequest.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class ListAllPermissionsRequest extends Request
{

    /**
     * The required Permissions to proceed with this request.
     *
     * @var  array
     */
    protected $access = [
        'permission' => 'manage-roles-permissions'
    ];

    /**
     * Id's that needs decoding before applying the validation rules.
     *
     * @var  array
     */
    protected $decode = [

    ];

    /**
     * Defining the URL parameters (`/stores/999/items`) allows applying
     * validation rules on them and allows accessing them like request data.
     *
     * @var  array
     */
    protected $urlParameters = [

    ];


    /**
     * @return  array
     */
    public function rules()
    {
        return [

        ];
    }

    /**
     * @return  bool
     */
    public function authorize()
    {
        return $this->hasAccess();
    }
}
