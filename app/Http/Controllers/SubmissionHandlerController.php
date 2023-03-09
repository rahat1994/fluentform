<?php

namespace FluentForm\App\Http\Controllers;

use FluentForm\App\Services\Form\SubmissionHandlerService;
use FluentForm\Framework\Validator\ValidationException;

class SubmissionHandlerController extends Controller

{
    /**
     * Handle form submission
     */
    public function submit(SubmissionHandlerService $submissionHandlerService)
    {
        try {
            parse_str($this->request->get('data'), $data);     // Parse the url encoded data from the request object.
            $data['_wp_http_referer'] = urldecode($data['_wp_http_referer']);
            $this->request->merge(['data' => $data]);           // Merge it back again to the request object.
            
            $formId = intval($this->request->get('form_id'));
            $response = $submissionHandlerService->handleSubmission($data, $formId);
            
            return $this->sendSuccess($response);
            
        } catch (ValidationException $e) {
            return $this->sendError($e->errors(), $e->getCode());
        }
    }
}
