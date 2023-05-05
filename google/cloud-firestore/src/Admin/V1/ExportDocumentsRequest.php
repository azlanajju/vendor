<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/admin/v1/firestore_admin.proto

namespace Google\Cloud\Firestore\Admin\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [FirestoreAdmin.ExportDocuments][google.firestore.admin.v1.FirestoreAdmin.ExportDocuments].
 *
 * Generated from protobuf message <code>google.firestore.admin.v1.ExportDocumentsRequest</code>
 */
class ExportDocumentsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Database to export. Should be of the form:
     * `projects/{project_id}/databases/{database_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Which collection ids to export. Unspecified means all collections.
     *
     * Generated from protobuf field <code>repeated string collection_ids = 2;</code>
     */
    private $collection_ids;
    /**
     * The output URI. Currently only supports Google Cloud Storage URIs of the
     * form: `gs://BUCKET_NAME[/NAMESPACE_PATH]`, where `BUCKET_NAME` is the name
     * of the Google Cloud Storage bucket and `NAMESPACE_PATH` is an optional
     * Google Cloud Storage namespace path. When
     * choosing a name, be sure to consider Google Cloud Storage naming
     * guidelines: https://cloud.google.com/storage/docs/naming.
     * If the URI is a bucket (without a namespace path), a prefix will be
     * generated based on the start time.
     *
     * Generated from protobuf field <code>string output_uri_prefix = 3;</code>
     */
    private $output_uri_prefix = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Database to export. Should be of the form:
     *           `projects/{project_id}/databases/{database_id}`.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $collection_ids
     *           Which collection ids to export. Unspecified means all collections.
     *     @type string $output_uri_prefix
     *           The output URI. Currently only supports Google Cloud Storage URIs of the
     *           form: `gs://BUCKET_NAME[/NAMESPACE_PATH]`, where `BUCKET_NAME` is the name
     *           of the Google Cloud Storage bucket and `NAMESPACE_PATH` is an optional
     *           Google Cloud Storage namespace path. When
     *           choosing a name, be sure to consider Google Cloud Storage naming
     *           guidelines: https://cloud.google.com/storage/docs/naming.
     *           If the URI is a bucket (without a namespace path), a prefix will be
     *           generated based on the start time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\Admin\V1\FirestoreAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Database to export. Should be of the form:
     * `projects/{project_id}/databases/{database_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Database to export. Should be of the form:
     * `projects/{project_id}/databases/{database_id}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Which collection ids to export. Unspecified means all collections.
     *
     * Generated from protobuf field <code>repeated string collection_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCollectionIds()
    {
        return $this->collection_ids;
    }

    /**
     * Which collection ids to export. Unspecified means all collections.
     *
     * Generated from protobuf field <code>repeated string collection_ids = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCollectionIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->collection_ids = $arr;

        return $this;
    }

    /**
     * The output URI. Currently only supports Google Cloud Storage URIs of the
     * form: `gs://BUCKET_NAME[/NAMESPACE_PATH]`, where `BUCKET_NAME` is the name
     * of the Google Cloud Storage bucket and `NAMESPACE_PATH` is an optional
     * Google Cloud Storage namespace path. When
     * choosing a name, be sure to consider Google Cloud Storage naming
     * guidelines: https://cloud.google.com/storage/docs/naming.
     * If the URI is a bucket (without a namespace path), a prefix will be
     * generated based on the start time.
     *
     * Generated from protobuf field <code>string output_uri_prefix = 3;</code>
     * @return string
     */
    public function getOutputUriPrefix()
    {
        return $this->output_uri_prefix;
    }

    /**
     * The output URI. Currently only supports Google Cloud Storage URIs of the
     * form: `gs://BUCKET_NAME[/NAMESPACE_PATH]`, where `BUCKET_NAME` is the name
     * of the Google Cloud Storage bucket and `NAMESPACE_PATH` is an optional
     * Google Cloud Storage namespace path. When
     * choosing a name, be sure to consider Google Cloud Storage naming
     * guidelines: https://cloud.google.com/storage/docs/naming.
     * If the URI is a bucket (without a namespace path), a prefix will be
     * generated based on the start time.
     *
     * Generated from protobuf field <code>string output_uri_prefix = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOutputUriPrefix($var)
    {
        GPBUtil::checkString($var, True);
        $this->output_uri_prefix = $var;

        return $this;
    }

}
