<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: December 26th, 2019 15:44+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Fri, Nov 1, 2019 09:29+1100 for FHIR v4.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestDispenseRequest;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestSubstitution;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMedicationRequestIntent;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMedicationrequestStatus;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestPriority;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri;
use DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRContainedTypeInterface;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * An order or request for both supply of the medication and the instructions for
 * administration of the medication to a patient. The resource is called
 * "MedicationRequest" rather than "MedicationPrescription" or "MedicationOrder" to
 * generalize the use across inpatient and outpatient settings, including care
 * plans, etc., and to harmonize with workflow patterns.
 * If the element is present, it must have either a \@value, an \@id, or extensions
 *
 * Class FHIRMedicationRequest
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource
 */
class FHIRMedicationRequest extends FHIRDomainResource implements PHPFHIRContainedTypeInterface
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST;
    const FIELD_AUTHORED_ON = 'authoredOn';
    const FIELD_AUTHORED_ON_EXT = '_authoredOn';
    const FIELD_BASED_ON = 'basedOn';
    const FIELD_CATEGORY = 'category';
    const FIELD_COURSE_OF_THERAPY_TYPE = 'courseOfTherapyType';
    const FIELD_DETECTED_ISSUE = 'detectedIssue';
    const FIELD_DISPENSE_REQUEST = 'dispenseRequest';
    const FIELD_DO_NOT_PERFORM = 'doNotPerform';
    const FIELD_DO_NOT_PERFORM_EXT = '_doNotPerform';
    const FIELD_DOSAGE_INSTRUCTION = 'dosageInstruction';
    const FIELD_ENCOUNTER = 'encounter';
    const FIELD_EVENT_HISTORY = 'eventHistory';
    const FIELD_GROUP_IDENTIFIER = 'groupIdentifier';
    const FIELD_IDENTIFIER = 'identifier';
    const FIELD_INSTANTIATES_CANONICAL = 'instantiatesCanonical';
    const FIELD_INSTANTIATES_CANONICAL_EXT = '_instantiatesCanonical';
    const FIELD_INSTANTIATES_URI = 'instantiatesUri';
    const FIELD_INSTANTIATES_URI_EXT = '_instantiatesUri';
    const FIELD_INSURANCE = 'insurance';
    const FIELD_INTENT = 'intent';
    const FIELD_INTENT_EXT = '_intent';
    const FIELD_MEDICATION_CODEABLE_CONCEPT = 'medicationCodeableConcept';
    const FIELD_MEDICATION_REFERENCE = 'medicationReference';
    const FIELD_NOTE = 'note';
    const FIELD_PERFORMER = 'performer';
    const FIELD_PERFORMER_TYPE = 'performerType';
    const FIELD_PRIOR_PRESCRIPTION = 'priorPrescription';
    const FIELD_PRIORITY = 'priority';
    const FIELD_PRIORITY_EXT = '_priority';
    const FIELD_REASON_CODE = 'reasonCode';
    const FIELD_REASON_REFERENCE = 'reasonReference';
    const FIELD_RECORDER = 'recorder';
    const FIELD_REPORTED_BOOLEAN = 'reportedBoolean';
    const FIELD_REPORTED_BOOLEAN_EXT = '_reportedBoolean';
    const FIELD_REPORTED_REFERENCE = 'reportedReference';
    const FIELD_REQUESTER = 'requester';
    const FIELD_STATUS = 'status';
    const FIELD_STATUS_EXT = '_status';
    const FIELD_STATUS_REASON = 'statusReason';
    const FIELD_SUBJECT = 'subject';
    const FIELD_SUBSTITUTION = 'substitution';
    const FIELD_SUPPORTING_INFORMATION = 'supportingInformation';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and perhaps time) when the prescription was initially written or
     * authored on.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    protected $authoredOn = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A plan or request that is fulfilled in whole or in part by this medication
     * request.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $basedOn = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the type of medication request (for example, where the medication is
     * expected to be consumed or administered (i.e. inpatient or outpatient)).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $category = [];

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The description of the overall patte3rn of the administration of the medication
     * to the patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $courseOfTherapyType = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * duplicate therapy, dosage alert etc.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $detectedIssue = [];

    /**
     * An order or request for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationRequest" rather than "MedicationPrescription" or "MedicationOrder" to
     * generalize the use across inpatient and outpatient settings, including care
     * plans, etc., and to harmonize with workflow patterns.
     *
     * Indicates the specific details for the dispense or medication supply part of a
     * medication request (also known as a Medication Prescription or Medication
     * Order). Note that this information is not always sent with the order. There may
     * be in some settings (e.g. hospitals) institutional or system support for
     * completing the dispense details in the pharmacy department.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestDispenseRequest
     */
    protected $dispenseRequest = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true indicates that the provider is asking for the medication request not to
     * occur.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $doNotPerform = null;

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage[]
     */
    protected $dosageInstruction = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Encounter during which this [x] was created or to which the creation of this
     * record is tightly associated.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $encounter = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Links to Provenance records for past versions of this resource or fulfilling
     * request or event resources that identify key state transitions or updates that
     * are likely to be relevant to a user looking at the current version of the
     * resource.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $eventHistory = [];

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A shared identifier common to all requests that were authorized more or less
     * simultaneously by a single author, representing the identifier of the
     * requisition or prescription.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    protected $groupIdentifier = null;

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers associated with this medication request that are defined by business
     * processes and/or used to refer to it when a direct URL reference to the resource
     * itself is not appropriate. They are business identifiers assigned to this
     * resource by the performer or other systems and remain constant as the resource
     * is updated and propagates from server to server.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    protected $identifier = [];

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a protocol, guideline, orderset, or other definition that is
     * adhered to in whole or in part by this MedicationRequest.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    protected $instantiatesCanonical = [];

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or
     * other definition that is adhered to in whole or in part by this
     * MedicationRequest.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri[]
     */
    protected $instantiatesUri = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or
     * pre-determinations that may be required for delivering the requested service.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $insurance = [];

    /**
     * The kind of medication order.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the request is a proposal, plan, or an original order.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMedicationRequestIntent
     */
    protected $intent = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being requested. This is a link to a resource that
     * represents the medication which may be the details of the medication or simply
     * an attribute carrying a code that identifies the medication from a known list of
     * medications. (choose any one of medication*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $medicationCodeableConcept = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being requested. This is a link to a resource that
     * represents the medication which may be the details of the medication or simply
     * an attribute carrying a code that identifies the medication from a known list of
     * medications. (choose any one of medication*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $medicationReference = null;

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Extra information about the prescription that could not be conveyed by the other
     * attributes.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    protected $note = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specified desired performer of the medication treatment (e.g. the performer
     * of the medication administration).
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $performer = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the type of performer of the administration of the medication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $performerType = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a resource representing an earlier order related order or
     * prescription.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $priorPrescription = null;

    /**
     * Identifies the level of importance to be assigned to actioning the request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the Medication Request should be addressed with respect to
     * other requests.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestPriority
     */
    protected $priority = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason or the indication for ordering or not ordering the medication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    protected $reasonCode = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Condition or observation that supports why the medication was ordered.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $reasonReference = [];

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who entered the order on behalf of another individual for example in
     * the case of a verbal or a telephone order.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $recorder = null;

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if this record was captured as a secondary 'reported' record rather
     * than as an original primary source-of-truth record. It may also indicate the
     * source of the report. (choose any one of reported*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    protected $reportedBoolean = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates if this record was captured as a secondary 'reported' record rather
     * than as an original primary source-of-truth record. It may also indicate the
     * source of the report. (choose any one of reported*, but only one)
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $reportedReference = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual, organization, or device that initiated the request and has
     * responsibility for its activation.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $requester = null;

    /**
     * A coded concept specifying the state of the prescribing event. Describes the
     * lifecycle of the prescription.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the current state of the order. Generally, this will be active
     * or completed state.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMedicationrequestStatus
     */
    protected $status = null;

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Captures the reason for the current state of the MedicationRequest.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    protected $statusReason = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a resource representing the person or set of individuals to whom the
     * medication will be given.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    protected $subject = null;

    /**
     * An order or request for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationRequest" rather than "MedicationPrescription" or "MedicationOrder" to
     * generalize the use across inpatient and outpatient settings, including care
     * plans, etc., and to harmonize with workflow patterns.
     *
     * Indicates whether or not substitution can or should be part of the dispense. In
     * some cases, substitution must happen, in other cases substitution must not
     * happen. This block explains the prescriber's intent. If nothing is specified
     * substitution may be done.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestSubstitution
     */
    protected $substitution = null;

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Include additional information (for example, patient height and weight) that
     * supports the ordering of the medication.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    protected $supportingInformation = [];

    /**
     * Validation map for fields in type MedicationRequest
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRMedicationRequest Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMedicationRequest::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_AUTHORED_ON]) || isset($data[self::FIELD_AUTHORED_ON_EXT])) {
            if (isset($data[self::FIELD_AUTHORED_ON])) {
                $value = $data[self::FIELD_AUTHORED_ON];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_AUTHORED_ON_EXT]) && is_array($data[self::FIELD_AUTHORED_ON_EXT])) {
                $ext = $data[self::FIELD_AUTHORED_ON_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDateTime) {
                    $this->setAuthoredOn($value);
                } else if (is_array($value)) {
                    $this->setAuthoredOn(new FHIRDateTime(array_merge($ext, $value)));
                } else {
                    $this->setAuthoredOn(new FHIRDateTime([FHIRDateTime::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setAuthoredOn(new FHIRDateTime($ext));
            }
        }
        if (isset($data[self::FIELD_BASED_ON])) {
            if (is_array($data[self::FIELD_BASED_ON])) {
                foreach($data[self::FIELD_BASED_ON] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addBasedOn($v);
                    } else {
                        $this->addBasedOn(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_BASED_ON] instanceof FHIRReference) {
                $this->addBasedOn($data[self::FIELD_BASED_ON]);
            } else {
                $this->addBasedOn(new FHIRReference($data[self::FIELD_BASED_ON]));
            }
        }
        if (isset($data[self::FIELD_CATEGORY])) {
            if (is_array($data[self::FIELD_CATEGORY])) {
                foreach($data[self::FIELD_CATEGORY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addCategory($v);
                    } else {
                        $this->addCategory(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_CATEGORY] instanceof FHIRCodeableConcept) {
                $this->addCategory($data[self::FIELD_CATEGORY]);
            } else {
                $this->addCategory(new FHIRCodeableConcept($data[self::FIELD_CATEGORY]));
            }
        }
        if (isset($data[self::FIELD_COURSE_OF_THERAPY_TYPE])) {
            if ($data[self::FIELD_COURSE_OF_THERAPY_TYPE] instanceof FHIRCodeableConcept) {
                $this->setCourseOfTherapyType($data[self::FIELD_COURSE_OF_THERAPY_TYPE]);
            } else {
                $this->setCourseOfTherapyType(new FHIRCodeableConcept($data[self::FIELD_COURSE_OF_THERAPY_TYPE]));
            }
        }
        if (isset($data[self::FIELD_DETECTED_ISSUE])) {
            if (is_array($data[self::FIELD_DETECTED_ISSUE])) {
                foreach($data[self::FIELD_DETECTED_ISSUE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addDetectedIssue($v);
                    } else {
                        $this->addDetectedIssue(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_DETECTED_ISSUE] instanceof FHIRReference) {
                $this->addDetectedIssue($data[self::FIELD_DETECTED_ISSUE]);
            } else {
                $this->addDetectedIssue(new FHIRReference($data[self::FIELD_DETECTED_ISSUE]));
            }
        }
        if (isset($data[self::FIELD_DISPENSE_REQUEST])) {
            if ($data[self::FIELD_DISPENSE_REQUEST] instanceof FHIRMedicationRequestDispenseRequest) {
                $this->setDispenseRequest($data[self::FIELD_DISPENSE_REQUEST]);
            } else {
                $this->setDispenseRequest(new FHIRMedicationRequestDispenseRequest($data[self::FIELD_DISPENSE_REQUEST]));
            }
        }
        if (isset($data[self::FIELD_DO_NOT_PERFORM]) || isset($data[self::FIELD_DO_NOT_PERFORM_EXT])) {
            if (isset($data[self::FIELD_DO_NOT_PERFORM])) {
                $value = $data[self::FIELD_DO_NOT_PERFORM];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_DO_NOT_PERFORM_EXT]) && is_array($data[self::FIELD_DO_NOT_PERFORM_EXT])) {
                $ext = $data[self::FIELD_DO_NOT_PERFORM_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setDoNotPerform($value);
                } else if (is_array($value)) {
                    $this->setDoNotPerform(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setDoNotPerform(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setDoNotPerform(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_DOSAGE_INSTRUCTION])) {
            if (is_array($data[self::FIELD_DOSAGE_INSTRUCTION])) {
                foreach($data[self::FIELD_DOSAGE_INSTRUCTION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRDosage) {
                        $this->addDosageInstruction($v);
                    } else {
                        $this->addDosageInstruction(new FHIRDosage($v));
                    }
                }
            } else if ($data[self::FIELD_DOSAGE_INSTRUCTION] instanceof FHIRDosage) {
                $this->addDosageInstruction($data[self::FIELD_DOSAGE_INSTRUCTION]);
            } else {
                $this->addDosageInstruction(new FHIRDosage($data[self::FIELD_DOSAGE_INSTRUCTION]));
            }
        }
        if (isset($data[self::FIELD_ENCOUNTER])) {
            if ($data[self::FIELD_ENCOUNTER] instanceof FHIRReference) {
                $this->setEncounter($data[self::FIELD_ENCOUNTER]);
            } else {
                $this->setEncounter(new FHIRReference($data[self::FIELD_ENCOUNTER]));
            }
        }
        if (isset($data[self::FIELD_EVENT_HISTORY])) {
            if (is_array($data[self::FIELD_EVENT_HISTORY])) {
                foreach($data[self::FIELD_EVENT_HISTORY] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addEventHistory($v);
                    } else {
                        $this->addEventHistory(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_EVENT_HISTORY] instanceof FHIRReference) {
                $this->addEventHistory($data[self::FIELD_EVENT_HISTORY]);
            } else {
                $this->addEventHistory(new FHIRReference($data[self::FIELD_EVENT_HISTORY]));
            }
        }
        if (isset($data[self::FIELD_GROUP_IDENTIFIER])) {
            if ($data[self::FIELD_GROUP_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->setGroupIdentifier($data[self::FIELD_GROUP_IDENTIFIER]);
            } else {
                $this->setGroupIdentifier(new FHIRIdentifier($data[self::FIELD_GROUP_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_IDENTIFIER])) {
            if (is_array($data[self::FIELD_IDENTIFIER])) {
                foreach($data[self::FIELD_IDENTIFIER] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRIdentifier) {
                        $this->addIdentifier($v);
                    } else {
                        $this->addIdentifier(new FHIRIdentifier($v));
                    }
                }
            } else if ($data[self::FIELD_IDENTIFIER] instanceof FHIRIdentifier) {
                $this->addIdentifier($data[self::FIELD_IDENTIFIER]);
            } else {
                $this->addIdentifier(new FHIRIdentifier($data[self::FIELD_IDENTIFIER]));
            }
        }
        if (isset($data[self::FIELD_INSTANTIATES_CANONICAL]) || isset($data[self::FIELD_INSTANTIATES_CANONICAL_EXT])) {
            if (isset($data[self::FIELD_INSTANTIATES_CANONICAL])) {
                $value = $data[self::FIELD_INSTANTIATES_CANONICAL];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_INSTANTIATES_CANONICAL_EXT]) && is_array($data[self::FIELD_INSTANTIATES_CANONICAL_EXT])) {
                $ext = $data[self::FIELD_INSTANTIATES_CANONICAL_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRCanonical) {
                    $this->addInstantiatesCanonical($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRCanonical) {
                            $this->addInstantiatesCanonical($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addInstantiatesCanonical(new FHIRCanonical(array_merge($v, $iext)));
                            } else {
                                $this->addInstantiatesCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addInstantiatesCanonical(new FHIRCanonical(array_merge($ext, $value)));
                } else {
                    $this->addInstantiatesCanonical(new FHIRCanonical([FHIRCanonical::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addInstantiatesCanonical(new FHIRCanonical($iext));
                }
            }
        }
        if (isset($data[self::FIELD_INSTANTIATES_URI]) || isset($data[self::FIELD_INSTANTIATES_URI_EXT])) {
            if (isset($data[self::FIELD_INSTANTIATES_URI])) {
                $value = $data[self::FIELD_INSTANTIATES_URI];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_INSTANTIATES_URI_EXT]) && is_array($data[self::FIELD_INSTANTIATES_URI_EXT])) {
                $ext = $data[self::FIELD_INSTANTIATES_URI_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRUri) {
                    $this->addInstantiatesUri($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRUri) {
                            $this->addInstantiatesUri($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addInstantiatesUri(new FHIRUri(array_merge($v, $iext)));
                            } else {
                                $this->addInstantiatesUri(new FHIRUri([FHIRUri::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addInstantiatesUri(new FHIRUri(array_merge($ext, $value)));
                } else {
                    $this->addInstantiatesUri(new FHIRUri([FHIRUri::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addInstantiatesUri(new FHIRUri($iext));
                }
            }
        }
        if (isset($data[self::FIELD_INSURANCE])) {
            if (is_array($data[self::FIELD_INSURANCE])) {
                foreach($data[self::FIELD_INSURANCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addInsurance($v);
                    } else {
                        $this->addInsurance(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_INSURANCE] instanceof FHIRReference) {
                $this->addInsurance($data[self::FIELD_INSURANCE]);
            } else {
                $this->addInsurance(new FHIRReference($data[self::FIELD_INSURANCE]));
            }
        }
        if (isset($data[self::FIELD_INTENT]) || isset($data[self::FIELD_INTENT_EXT])) {
            if (isset($data[self::FIELD_INTENT])) {
                $value = $data[self::FIELD_INTENT];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_INTENT_EXT]) && is_array($data[self::FIELD_INTENT_EXT])) {
                $ext = $data[self::FIELD_INTENT_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRMedicationRequestIntent) {
                    $this->setIntent($value);
                } else if (is_array($value)) {
                    $this->setIntent(new FHIRMedicationRequestIntent(array_merge($ext, $value)));
                } else {
                    $this->setIntent(new FHIRMedicationRequestIntent([FHIRMedicationRequestIntent::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setIntent(new FHIRMedicationRequestIntent($ext));
            }
        }
        if (isset($data[self::FIELD_MEDICATION_CODEABLE_CONCEPT])) {
            if ($data[self::FIELD_MEDICATION_CODEABLE_CONCEPT] instanceof FHIRCodeableConcept) {
                $this->setMedicationCodeableConcept($data[self::FIELD_MEDICATION_CODEABLE_CONCEPT]);
            } else {
                $this->setMedicationCodeableConcept(new FHIRCodeableConcept($data[self::FIELD_MEDICATION_CODEABLE_CONCEPT]));
            }
        }
        if (isset($data[self::FIELD_MEDICATION_REFERENCE])) {
            if ($data[self::FIELD_MEDICATION_REFERENCE] instanceof FHIRReference) {
                $this->setMedicationReference($data[self::FIELD_MEDICATION_REFERENCE]);
            } else {
                $this->setMedicationReference(new FHIRReference($data[self::FIELD_MEDICATION_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_NOTE])) {
            if (is_array($data[self::FIELD_NOTE])) {
                foreach($data[self::FIELD_NOTE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRAnnotation) {
                        $this->addNote($v);
                    } else {
                        $this->addNote(new FHIRAnnotation($v));
                    }
                }
            } else if ($data[self::FIELD_NOTE] instanceof FHIRAnnotation) {
                $this->addNote($data[self::FIELD_NOTE]);
            } else {
                $this->addNote(new FHIRAnnotation($data[self::FIELD_NOTE]));
            }
        }
        if (isset($data[self::FIELD_PERFORMER])) {
            if ($data[self::FIELD_PERFORMER] instanceof FHIRReference) {
                $this->setPerformer($data[self::FIELD_PERFORMER]);
            } else {
                $this->setPerformer(new FHIRReference($data[self::FIELD_PERFORMER]));
            }
        }
        if (isset($data[self::FIELD_PERFORMER_TYPE])) {
            if ($data[self::FIELD_PERFORMER_TYPE] instanceof FHIRCodeableConcept) {
                $this->setPerformerType($data[self::FIELD_PERFORMER_TYPE]);
            } else {
                $this->setPerformerType(new FHIRCodeableConcept($data[self::FIELD_PERFORMER_TYPE]));
            }
        }
        if (isset($data[self::FIELD_PRIOR_PRESCRIPTION])) {
            if ($data[self::FIELD_PRIOR_PRESCRIPTION] instanceof FHIRReference) {
                $this->setPriorPrescription($data[self::FIELD_PRIOR_PRESCRIPTION]);
            } else {
                $this->setPriorPrescription(new FHIRReference($data[self::FIELD_PRIOR_PRESCRIPTION]));
            }
        }
        if (isset($data[self::FIELD_PRIORITY]) || isset($data[self::FIELD_PRIORITY_EXT])) {
            if (isset($data[self::FIELD_PRIORITY])) {
                $value = $data[self::FIELD_PRIORITY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PRIORITY_EXT]) && is_array($data[self::FIELD_PRIORITY_EXT])) {
                $ext = $data[self::FIELD_PRIORITY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRRequestPriority) {
                    $this->setPriority($value);
                } else if (is_array($value)) {
                    $this->setPriority(new FHIRRequestPriority(array_merge($ext, $value)));
                } else {
                    $this->setPriority(new FHIRRequestPriority([FHIRRequestPriority::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setPriority(new FHIRRequestPriority($ext));
            }
        }
        if (isset($data[self::FIELD_REASON_CODE])) {
            if (is_array($data[self::FIELD_REASON_CODE])) {
                foreach($data[self::FIELD_REASON_CODE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRCodeableConcept) {
                        $this->addReasonCode($v);
                    } else {
                        $this->addReasonCode(new FHIRCodeableConcept($v));
                    }
                }
            } else if ($data[self::FIELD_REASON_CODE] instanceof FHIRCodeableConcept) {
                $this->addReasonCode($data[self::FIELD_REASON_CODE]);
            } else {
                $this->addReasonCode(new FHIRCodeableConcept($data[self::FIELD_REASON_CODE]));
            }
        }
        if (isset($data[self::FIELD_REASON_REFERENCE])) {
            if (is_array($data[self::FIELD_REASON_REFERENCE])) {
                foreach($data[self::FIELD_REASON_REFERENCE] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addReasonReference($v);
                    } else {
                        $this->addReasonReference(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_REASON_REFERENCE] instanceof FHIRReference) {
                $this->addReasonReference($data[self::FIELD_REASON_REFERENCE]);
            } else {
                $this->addReasonReference(new FHIRReference($data[self::FIELD_REASON_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_RECORDER])) {
            if ($data[self::FIELD_RECORDER] instanceof FHIRReference) {
                $this->setRecorder($data[self::FIELD_RECORDER]);
            } else {
                $this->setRecorder(new FHIRReference($data[self::FIELD_RECORDER]));
            }
        }
        if (isset($data[self::FIELD_REPORTED_BOOLEAN]) || isset($data[self::FIELD_REPORTED_BOOLEAN_EXT])) {
            if (isset($data[self::FIELD_REPORTED_BOOLEAN])) {
                $value = $data[self::FIELD_REPORTED_BOOLEAN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_REPORTED_BOOLEAN_EXT]) && is_array($data[self::FIELD_REPORTED_BOOLEAN_EXT])) {
                $ext = $data[self::FIELD_REPORTED_BOOLEAN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRBoolean) {
                    $this->setReportedBoolean($value);
                } else if (is_array($value)) {
                    $this->setReportedBoolean(new FHIRBoolean(array_merge($ext, $value)));
                } else {
                    $this->setReportedBoolean(new FHIRBoolean([FHIRBoolean::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setReportedBoolean(new FHIRBoolean($ext));
            }
        }
        if (isset($data[self::FIELD_REPORTED_REFERENCE])) {
            if ($data[self::FIELD_REPORTED_REFERENCE] instanceof FHIRReference) {
                $this->setReportedReference($data[self::FIELD_REPORTED_REFERENCE]);
            } else {
                $this->setReportedReference(new FHIRReference($data[self::FIELD_REPORTED_REFERENCE]));
            }
        }
        if (isset($data[self::FIELD_REQUESTER])) {
            if ($data[self::FIELD_REQUESTER] instanceof FHIRReference) {
                $this->setRequester($data[self::FIELD_REQUESTER]);
            } else {
                $this->setRequester(new FHIRReference($data[self::FIELD_REQUESTER]));
            }
        }
        if (isset($data[self::FIELD_STATUS]) || isset($data[self::FIELD_STATUS_EXT])) {
            if (isset($data[self::FIELD_STATUS])) {
                $value = $data[self::FIELD_STATUS];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_STATUS_EXT]) && is_array($data[self::FIELD_STATUS_EXT])) {
                $ext = $data[self::FIELD_STATUS_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRMedicationrequestStatus) {
                    $this->setStatus($value);
                } else if (is_array($value)) {
                    $this->setStatus(new FHIRMedicationrequestStatus(array_merge($ext, $value)));
                } else {
                    $this->setStatus(new FHIRMedicationrequestStatus([FHIRMedicationrequestStatus::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                $this->setStatus(new FHIRMedicationrequestStatus($ext));
            }
        }
        if (isset($data[self::FIELD_STATUS_REASON])) {
            if ($data[self::FIELD_STATUS_REASON] instanceof FHIRCodeableConcept) {
                $this->setStatusReason($data[self::FIELD_STATUS_REASON]);
            } else {
                $this->setStatusReason(new FHIRCodeableConcept($data[self::FIELD_STATUS_REASON]));
            }
        }
        if (isset($data[self::FIELD_SUBJECT])) {
            if ($data[self::FIELD_SUBJECT] instanceof FHIRReference) {
                $this->setSubject($data[self::FIELD_SUBJECT]);
            } else {
                $this->setSubject(new FHIRReference($data[self::FIELD_SUBJECT]));
            }
        }
        if (isset($data[self::FIELD_SUBSTITUTION])) {
            if ($data[self::FIELD_SUBSTITUTION] instanceof FHIRMedicationRequestSubstitution) {
                $this->setSubstitution($data[self::FIELD_SUBSTITUTION]);
            } else {
                $this->setSubstitution(new FHIRMedicationRequestSubstitution($data[self::FIELD_SUBSTITUTION]));
            }
        }
        if (isset($data[self::FIELD_SUPPORTING_INFORMATION])) {
            if (is_array($data[self::FIELD_SUPPORTING_INFORMATION])) {
                foreach($data[self::FIELD_SUPPORTING_INFORMATION] as $v) {
                    if (null === $v) {
                        continue;
                    }
                    if ($v instanceof FHIRReference) {
                        $this->addSupportingInformation($v);
                    } else {
                        $this->addSupportingInformation(new FHIRReference($v));
                    }
                }
            } else if ($data[self::FIELD_SUPPORTING_INFORMATION] instanceof FHIRReference) {
                $this->addSupportingInformation($data[self::FIELD_SUPPORTING_INFORMATION]);
            } else {
                $this->addSupportingInformation(new FHIRReference($data[self::FIELD_SUPPORTING_INFORMATION]));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName()
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition()
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if (null !== $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<MedicationRequest{$xmlns}></MedicationRequest>";
    }
    /**
     * @return string
     */
    public function _getResourceType()
    {
        return static::FHIR_TYPE_NAME;
    }


    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and perhaps time) when the prescription was initially written or
     * authored on.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime
     */
    public function getAuthoredOn()
    {
        return $this->authoredOn;
    }

    /**
     * A date, date-time or partial date (e.g. just year or year + month). If hours and
     * minutes are specified, a time zone SHALL be populated. The format is a union of
     * the schema types gYear, gYearMonth, date and dateTime. Seconds must be provided
     * due to schema type constraints but may be zero-filled and may be ignored. Dates
     * SHALL be valid dates.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The date (and perhaps time) when the prescription was initially written or
     * authored on.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDateTime $authoredOn
     * @return static
     */
    public function setAuthoredOn($authoredOn = null)
    {
        if (null === $authoredOn) {
            $this->authoredOn = null;
            return $this;
        }
        if ($authoredOn instanceof FHIRDateTime) {
            $this->authoredOn = $authoredOn;
            return $this;
        }
        $this->authoredOn = new FHIRDateTime($authoredOn);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A plan or request that is fulfilled in whole or in part by this medication
     * request.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getBasedOn()
    {
        return $this->basedOn;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A plan or request that is fulfilled in whole or in part by this medication
     * request.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $basedOn
     * @return static
     */
    public function addBasedOn(FHIRReference $basedOn = null)
    {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A plan or request that is fulfilled in whole or in part by this medication
     * request.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $basedOn
     * @return static
     */
    public function setBasedOn(array $basedOn = [])
    {
        $this->basedOn = [];
        if ([] === $basedOn) {
            return $this;
        }
        foreach($basedOn as $v) {
            if ($v instanceof FHIRReference) {
                $this->addBasedOn($v);
            } else {
                $this->addBasedOn(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the type of medication request (for example, where the medication is
     * expected to be consumed or administered (i.e. inpatient or outpatient)).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the type of medication request (for example, where the medication is
     * expected to be consumed or administered (i.e. inpatient or outpatient)).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $category
     * @return static
     */
    public function addCategory(FHIRCodeableConcept $category = null)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the type of medication request (for example, where the medication is
     * expected to be consumed or administered (i.e. inpatient or outpatient)).
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $category
     * @return static
     */
    public function setCategory(array $category = [])
    {
        $this->category = [];
        if ([] === $category) {
            return $this;
        }
        foreach($category as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addCategory($v);
            } else {
                $this->addCategory(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The description of the overall patte3rn of the administration of the medication
     * to the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getCourseOfTherapyType()
    {
        return $this->courseOfTherapyType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The description of the overall patte3rn of the administration of the medication
     * to the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $courseOfTherapyType
     * @return static
     */
    public function setCourseOfTherapyType(FHIRCodeableConcept $courseOfTherapyType = null)
    {
        $this->courseOfTherapyType = $courseOfTherapyType;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * duplicate therapy, dosage alert etc.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getDetectedIssue()
    {
        return $this->detectedIssue;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * duplicate therapy, dosage alert etc.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $detectedIssue
     * @return static
     */
    public function addDetectedIssue(FHIRReference $detectedIssue = null)
    {
        $this->detectedIssue[] = $detectedIssue;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates an actual or potential clinical issue with or between one or more
     * active or proposed clinical actions for a patient; e.g. Drug-drug interaction,
     * duplicate therapy, dosage alert etc.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $detectedIssue
     * @return static
     */
    public function setDetectedIssue(array $detectedIssue = [])
    {
        $this->detectedIssue = [];
        if ([] === $detectedIssue) {
            return $this;
        }
        foreach($detectedIssue as $v) {
            if ($v instanceof FHIRReference) {
                $this->addDetectedIssue($v);
            } else {
                $this->addDetectedIssue(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * An order or request for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationRequest" rather than "MedicationPrescription" or "MedicationOrder" to
     * generalize the use across inpatient and outpatient settings, including care
     * plans, etc., and to harmonize with workflow patterns.
     *
     * Indicates the specific details for the dispense or medication supply part of a
     * medication request (also known as a Medication Prescription or Medication
     * Order). Note that this information is not always sent with the order. There may
     * be in some settings (e.g. hospitals) institutional or system support for
     * completing the dispense details in the pharmacy department.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestDispenseRequest
     */
    public function getDispenseRequest()
    {
        return $this->dispenseRequest;
    }

    /**
     * An order or request for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationRequest" rather than "MedicationPrescription" or "MedicationOrder" to
     * generalize the use across inpatient and outpatient settings, including care
     * plans, etc., and to harmonize with workflow patterns.
     *
     * Indicates the specific details for the dispense or medication supply part of a
     * medication request (also known as a Medication Prescription or Medication
     * Order). Note that this information is not always sent with the order. There may
     * be in some settings (e.g. hospitals) institutional or system support for
     * completing the dispense details in the pharmacy department.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestDispenseRequest $dispenseRequest
     * @return static
     */
    public function setDispenseRequest(FHIRMedicationRequestDispenseRequest $dispenseRequest = null)
    {
        $this->dispenseRequest = $dispenseRequest;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true indicates that the provider is asking for the medication request not to
     * occur.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getDoNotPerform()
    {
        return $this->doNotPerform;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * If true indicates that the provider is asking for the medication request not to
     * occur.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $doNotPerform
     * @return static
     */
    public function setDoNotPerform($doNotPerform = null)
    {
        if (null === $doNotPerform) {
            $this->doNotPerform = null;
            return $this;
        }
        if ($doNotPerform instanceof FHIRBoolean) {
            $this->doNotPerform = $doNotPerform;
            return $this;
        }
        $this->doNotPerform = new FHIRBoolean($doNotPerform);
        return $this;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage[]
     */
    public function getDosageInstruction()
    {
        return $this->dosageInstruction;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage $dosageInstruction
     * @return static
     */
    public function addDosageInstruction(FHIRDosage $dosageInstruction = null)
    {
        $this->dosageInstruction[] = $dosageInstruction;
        return $this;
    }

    /**
     * Indicates how the medication is/was taken or should be taken by the patient.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates how the medication is to be used by the patient.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRDosage[] $dosageInstruction
     * @return static
     */
    public function setDosageInstruction(array $dosageInstruction = [])
    {
        $this->dosageInstruction = [];
        if ([] === $dosageInstruction) {
            return $this;
        }
        foreach($dosageInstruction as $v) {
            if ($v instanceof FHIRDosage) {
                $this->addDosageInstruction($v);
            } else {
                $this->addDosageInstruction(new FHIRDosage($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Encounter during which this [x] was created or to which the creation of this
     * record is tightly associated.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The Encounter during which this [x] was created or to which the creation of this
     * record is tightly associated.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $encounter
     * @return static
     */
    public function setEncounter(FHIRReference $encounter = null)
    {
        $this->encounter = $encounter;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Links to Provenance records for past versions of this resource or fulfilling
     * request or event resources that identify key state transitions or updates that
     * are likely to be relevant to a user looking at the current version of the
     * resource.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getEventHistory()
    {
        return $this->eventHistory;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Links to Provenance records for past versions of this resource or fulfilling
     * request or event resources that identify key state transitions or updates that
     * are likely to be relevant to a user looking at the current version of the
     * resource.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $eventHistory
     * @return static
     */
    public function addEventHistory(FHIRReference $eventHistory = null)
    {
        $this->eventHistory[] = $eventHistory;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Links to Provenance records for past versions of this resource or fulfilling
     * request or event resources that identify key state transitions or updates that
     * are likely to be relevant to a user looking at the current version of the
     * resource.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $eventHistory
     * @return static
     */
    public function setEventHistory(array $eventHistory = [])
    {
        $this->eventHistory = [];
        if ([] === $eventHistory) {
            return $this;
        }
        foreach($eventHistory as $v) {
            if ($v instanceof FHIRReference) {
                $this->addEventHistory($v);
            } else {
                $this->addEventHistory(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A shared identifier common to all requests that were authorized more or less
     * simultaneously by a single author, representing the identifier of the
     * requisition or prescription.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier
     */
    public function getGroupIdentifier()
    {
        return $this->groupIdentifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A shared identifier common to all requests that were authorized more or less
     * simultaneously by a single author, representing the identifier of the
     * requisition or prescription.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $groupIdentifier
     * @return static
     */
    public function setGroupIdentifier(FHIRIdentifier $groupIdentifier = null)
    {
        $this->groupIdentifier = $groupIdentifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers associated with this medication request that are defined by business
     * processes and/or used to refer to it when a direct URL reference to the resource
     * itself is not appropriate. They are business identifiers assigned to this
     * resource by the performer or other systems and remain constant as the resource
     * is updated and propagates from server to server.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers associated with this medication request that are defined by business
     * processes and/or used to refer to it when a direct URL reference to the resource
     * itself is not appropriate. They are business identifiers assigned to this
     * resource by the performer or other systems and remain constant as the resource
     * is updated and propagates from server to server.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier $identifier
     * @return static
     */
    public function addIdentifier(FHIRIdentifier $identifier = null)
    {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * An identifier - identifies some entity uniquely and unambiguously. Typically
     * this is used for business identifiers.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifiers associated with this medication request that are defined by business
     * processes and/or used to refer to it when a direct URL reference to the resource
     * itself is not appropriate. They are business identifiers assigned to this
     * resource by the performer or other systems and remain constant as the resource
     * is updated and propagates from server to server.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRIdentifier[] $identifier
     * @return static
     */
    public function setIdentifier(array $identifier = [])
    {
        $this->identifier = [];
        if ([] === $identifier) {
            return $this;
        }
        foreach($identifier as $v) {
            if ($v instanceof FHIRIdentifier) {
                $this->addIdentifier($v);
            } else {
                $this->addIdentifier(new FHIRIdentifier($v));
            }
        }
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a protocol, guideline, orderset, or other definition that is
     * adhered to in whole or in part by this MedicationRequest.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[]
     */
    public function getInstantiatesCanonical()
    {
        return $this->instantiatesCanonical;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a protocol, guideline, orderset, or other definition that is
     * adhered to in whole or in part by this MedicationRequest.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical $instantiatesCanonical
     * @return static
     */
    public function addInstantiatesCanonical($instantiatesCanonical = null)
    {
        if (null === $instantiatesCanonical) {
            $this->instantiatesCanonical = [];
            return $this;
        }
        if ($instantiatesCanonical instanceof FHIRCanonical) {
            $this->instantiatesCanonical[] = $instantiatesCanonical;
            return $this;
        }
        $this->instantiatesCanonical[] = new FHIRCanonical($instantiatesCanonical);
        return $this;
    }

    /**
     * A URI that is a reference to a canonical URL on a FHIR resource
     * see [Canonical References](references.html#canonical)
     * If the element is present, it must have either a \@value, an \@id referenced from
     * the Narrative, or extensions
     *
     * The URL pointing to a protocol, guideline, orderset, or other definition that is
     * adhered to in whole or in part by this MedicationRequest.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCanonical[] $instantiatesCanonical
     * @return static
     */
    public function setInstantiatesCanonical(array $instantiatesCanonical = [])
    {
        $this->instantiatesCanonical = [];
        if ([] === $instantiatesCanonical) {
            return $this;
        }
        foreach($instantiatesCanonical as $v) {
            if ($v instanceof FHIRCanonical) {
                $this->addInstantiatesCanonical($v);
            } else {
                $this->addInstantiatesCanonical(new FHIRCanonical($v));
            }
        }
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or
     * other definition that is adhered to in whole or in part by this
     * MedicationRequest.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri[]
     */
    public function getInstantiatesUri()
    {
        return $this->instantiatesUri;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or
     * other definition that is adhered to in whole or in part by this
     * MedicationRequest.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri $instantiatesUri
     * @return static
     */
    public function addInstantiatesUri($instantiatesUri = null)
    {
        if (null === $instantiatesUri) {
            $this->instantiatesUri = [];
            return $this;
        }
        if ($instantiatesUri instanceof FHIRUri) {
            $this->instantiatesUri[] = $instantiatesUri;
            return $this;
        }
        $this->instantiatesUri[] = new FHIRUri($instantiatesUri);
        return $this;
    }

    /**
     * String of characters used to identify a name or a resource
     * see http://en.wikipedia.org/wiki/Uniform_resource_identifier
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The URL pointing to an externally maintained protocol, guideline, orderset or
     * other definition that is adhered to in whole or in part by this
     * MedicationRequest.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRUri[] $instantiatesUri
     * @return static
     */
    public function setInstantiatesUri(array $instantiatesUri = [])
    {
        $this->instantiatesUri = [];
        if ([] === $instantiatesUri) {
            return $this;
        }
        foreach($instantiatesUri as $v) {
            if ($v instanceof FHIRUri) {
                $this->addInstantiatesUri($v);
            } else {
                $this->addInstantiatesUri(new FHIRUri($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or
     * pre-determinations that may be required for delivering the requested service.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or
     * pre-determinations that may be required for delivering the requested service.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $insurance
     * @return static
     */
    public function addInsurance(FHIRReference $insurance = null)
    {
        $this->insurance[] = $insurance;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Insurance plans, coverage extensions, pre-authorizations and/or
     * pre-determinations that may be required for delivering the requested service.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $insurance
     * @return static
     */
    public function setInsurance(array $insurance = [])
    {
        $this->insurance = [];
        if ([] === $insurance) {
            return $this;
        }
        foreach($insurance as $v) {
            if ($v instanceof FHIRReference) {
                $this->addInsurance($v);
            } else {
                $this->addInsurance(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * The kind of medication order.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the request is a proposal, plan, or an original order.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMedicationRequestIntent
     */
    public function getIntent()
    {
        return $this->intent;
    }

    /**
     * The kind of medication order.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Whether the request is a proposal, plan, or an original order.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMedicationRequestIntent $intent
     * @return static
     */
    public function setIntent(FHIRMedicationRequestIntent $intent = null)
    {
        $this->intent = $intent;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being requested. This is a link to a resource that
     * represents the medication which may be the details of the medication or simply
     * an attribute carrying a code that identifies the medication from a known list of
     * medications. (choose any one of medication*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getMedicationCodeableConcept()
    {
        return $this->medicationCodeableConcept;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being requested. This is a link to a resource that
     * represents the medication which may be the details of the medication or simply
     * an attribute carrying a code that identifies the medication from a known list of
     * medications. (choose any one of medication*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $medicationCodeableConcept
     * @return static
     */
    public function setMedicationCodeableConcept(FHIRCodeableConcept $medicationCodeableConcept = null)
    {
        $this->medicationCodeableConcept = $medicationCodeableConcept;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being requested. This is a link to a resource that
     * represents the medication which may be the details of the medication or simply
     * an attribute carrying a code that identifies the medication from a known list of
     * medications. (choose any one of medication*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getMedicationReference()
    {
        return $this->medicationReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Identifies the medication being requested. This is a link to a resource that
     * represents the medication which may be the details of the medication or simply
     * an attribute carrying a code that identifies the medication from a known list of
     * medications. (choose any one of medication*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $medicationReference
     * @return static
     */
    public function setMedicationReference(FHIRReference $medicationReference = null)
    {
        $this->medicationReference = $medicationReference;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Extra information about the prescription that could not be conveyed by the other
     * attributes.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Extra information about the prescription that could not be conveyed by the other
     * attributes.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation $note
     * @return static
     */
    public function addNote(FHIRAnnotation $note = null)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * A text note which also contains information about who made the statement and
     * when.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Extra information about the prescription that could not be conveyed by the other
     * attributes.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRAnnotation[] $note
     * @return static
     */
    public function setNote(array $note = [])
    {
        $this->note = [];
        if ([] === $note) {
            return $this;
        }
        foreach($note as $v) {
            if ($v instanceof FHIRAnnotation) {
                $this->addNote($v);
            } else {
                $this->addNote(new FHIRAnnotation($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specified desired performer of the medication treatment (e.g. the performer
     * of the medication administration).
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The specified desired performer of the medication treatment (e.g. the performer
     * of the medication administration).
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $performer
     * @return static
     */
    public function setPerformer(FHIRReference $performer = null)
    {
        $this->performer = $performer;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the type of performer of the administration of the medication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getPerformerType()
    {
        return $this->performerType;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates the type of performer of the administration of the medication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $performerType
     * @return static
     */
    public function setPerformerType(FHIRCodeableConcept $performerType = null)
    {
        $this->performerType = $performerType;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a resource representing an earlier order related order or
     * prescription.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getPriorPrescription()
    {
        return $this->priorPrescription;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a resource representing an earlier order related order or
     * prescription.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $priorPrescription
     * @return static
     */
    public function setPriorPrescription(FHIRReference $priorPrescription = null)
    {
        $this->priorPrescription = $priorPrescription;
        return $this;
    }

    /**
     * Identifies the level of importance to be assigned to actioning the request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the Medication Request should be addressed with respect to
     * other requests.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestPriority
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Identifies the level of importance to be assigned to actioning the request.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates how quickly the Medication Request should be addressed with respect to
     * other requests.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRRequestPriority $priority
     * @return static
     */
    public function setPriority(FHIRRequestPriority $priority = null)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason or the indication for ordering or not ordering the medication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason or the indication for ordering or not ordering the medication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return static
     */
    public function addReasonCode(FHIRCodeableConcept $reasonCode = null)
    {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The reason or the indication for ordering or not ordering the medication.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept[] $reasonCode
     * @return static
     */
    public function setReasonCode(array $reasonCode = [])
    {
        $this->reasonCode = [];
        if ([] === $reasonCode) {
            return $this;
        }
        foreach($reasonCode as $v) {
            if ($v instanceof FHIRCodeableConcept) {
                $this->addReasonCode($v);
            } else {
                $this->addReasonCode(new FHIRCodeableConcept($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Condition or observation that supports why the medication was ordered.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getReasonReference()
    {
        return $this->reasonReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Condition or observation that supports why the medication was ordered.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $reasonReference
     * @return static
     */
    public function addReasonReference(FHIRReference $reasonReference = null)
    {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Condition or observation that supports why the medication was ordered.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $reasonReference
     * @return static
     */
    public function setReasonReference(array $reasonReference = [])
    {
        $this->reasonReference = [];
        if ([] === $reasonReference) {
            return $this;
        }
        foreach($reasonReference as $v) {
            if ($v instanceof FHIRReference) {
                $this->addReasonReference($v);
            } else {
                $this->addReasonReference(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who entered the order on behalf of another individual for example in
     * the case of a verbal or a telephone order.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getRecorder()
    {
        return $this->recorder;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The person who entered the order on behalf of another individual for example in
     * the case of a verbal or a telephone order.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $recorder
     * @return static
     */
    public function setRecorder(FHIRReference $recorder = null)
    {
        $this->recorder = $recorder;
        return $this;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if this record was captured as a secondary 'reported' record rather
     * than as an original primary source-of-truth record. It may also indicate the
     * source of the report. (choose any one of reported*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean
     */
    public function getReportedBoolean()
    {
        return $this->reportedBoolean;
    }

    /**
     * Value of "true" or "false"
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Indicates if this record was captured as a secondary 'reported' record rather
     * than as an original primary source-of-truth record. It may also indicate the
     * source of the report. (choose any one of reported*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBoolean $reportedBoolean
     * @return static
     */
    public function setReportedBoolean($reportedBoolean = null)
    {
        if (null === $reportedBoolean) {
            $this->reportedBoolean = null;
            return $this;
        }
        if ($reportedBoolean instanceof FHIRBoolean) {
            $this->reportedBoolean = $reportedBoolean;
            return $this;
        }
        $this->reportedBoolean = new FHIRBoolean($reportedBoolean);
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates if this record was captured as a secondary 'reported' record rather
     * than as an original primary source-of-truth record. It may also indicate the
     * source of the report. (choose any one of reported*, but only one)
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getReportedReference()
    {
        return $this->reportedReference;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Indicates if this record was captured as a secondary 'reported' record rather
     * than as an original primary source-of-truth record. It may also indicate the
     * source of the report. (choose any one of reported*, but only one)
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $reportedReference
     * @return static
     */
    public function setReportedReference(FHIRReference $reportedReference = null)
    {
        $this->reportedReference = $reportedReference;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual, organization, or device that initiated the request and has
     * responsibility for its activation.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getRequester()
    {
        return $this->requester;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * The individual, organization, or device that initiated the request and has
     * responsibility for its activation.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $requester
     * @return static
     */
    public function setRequester(FHIRReference $requester = null)
    {
        $this->requester = $requester;
        return $this;
    }

    /**
     * A coded concept specifying the state of the prescribing event. Describes the
     * lifecycle of the prescription.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the current state of the order. Generally, this will be active
     * or completed state.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMedicationrequestStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * A coded concept specifying the state of the prescribing event. Describes the
     * lifecycle of the prescription.
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * A code specifying the current state of the order. Generally, this will be active
     * or completed state.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRMedicationrequestStatus $status
     * @return static
     */
    public function setStatus(FHIRMedicationrequestStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Captures the reason for the current state of the MedicationRequest.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept
     */
    public function getStatusReason()
    {
        return $this->statusReason;
    }

    /**
     * A concept that may be defined by a formal reference to a terminology or ontology
     * or may be provided by text.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Captures the reason for the current state of the MedicationRequest.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRCodeableConcept $statusReason
     * @return static
     */
    public function setStatusReason(FHIRCodeableConcept $statusReason = null)
    {
        $this->statusReason = $statusReason;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a resource representing the person or set of individuals to whom the
     * medication will be given.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * A link to a resource representing the person or set of individuals to whom the
     * medication will be given.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $subject
     * @return static
     */
    public function setSubject(FHIRReference $subject = null)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * An order or request for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationRequest" rather than "MedicationPrescription" or "MedicationOrder" to
     * generalize the use across inpatient and outpatient settings, including care
     * plans, etc., and to harmonize with workflow patterns.
     *
     * Indicates whether or not substitution can or should be part of the dispense. In
     * some cases, substitution must happen, in other cases substitution must not
     * happen. This block explains the prescriber's intent. If nothing is specified
     * substitution may be done.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestSubstitution
     */
    public function getSubstitution()
    {
        return $this->substitution;
    }

    /**
     * An order or request for both supply of the medication and the instructions for
     * administration of the medication to a patient. The resource is called
     * "MedicationRequest" rather than "MedicationPrescription" or "MedicationOrder" to
     * generalize the use across inpatient and outpatient settings, including care
     * plans, etc., and to harmonize with workflow patterns.
     *
     * Indicates whether or not substitution can or should be part of the dispense. In
     * some cases, substitution must happen, in other cases substitution must not
     * happen. This block explains the prescriber's intent. If nothing is specified
     * substitution may be done.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMedicationRequest\FHIRMedicationRequestSubstitution $substitution
     * @return static
     */
    public function setSubstitution(FHIRMedicationRequestSubstitution $substitution = null)
    {
        $this->substitution = $substitution;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Include additional information (for example, patient height and weight) that
     * supports the ordering of the medication.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[]
     */
    public function getSupportingInformation()
    {
        return $this->supportingInformation;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Include additional information (for example, patient height and weight) that
     * supports the ordering of the medication.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference $supportingInformation
     * @return static
     */
    public function addSupportingInformation(FHIRReference $supportingInformation = null)
    {
        $this->supportingInformation[] = $supportingInformation;
        return $this;
    }

    /**
     * A reference from one resource to another.
     * If the element is present, it must have a value for at least one of the defined
     * elements, an \@id referenced from the Narrative, or extensions
     *
     * Include additional information (for example, patient height and weight) that
     * supports the ordering of the medication.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRReference[] $supportingInformation
     * @return static
     */
    public function setSupportingInformation(array $supportingInformation = [])
    {
        $this->supportingInformation = [];
        if ([] === $supportingInformation) {
            return $this;
        }
        foreach($supportingInformation as $v) {
            if ($v instanceof FHIRReference) {
                $this->addSupportingInformation($v);
            } else {
                $this->addSupportingInformation(new FHIRReference($v));
            }
        }
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules()
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors()
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getAuthoredOn())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_AUTHORED_ON] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getBasedOn())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_BASED_ON, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_CATEGORY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getCourseOfTherapyType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_COURSE_OF_THERAPY_TYPE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDetectedIssue())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DETECTED_ISSUE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getDispenseRequest())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DISPENSE_REQUEST] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getDoNotPerform())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_DO_NOT_PERFORM] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getDosageInstruction())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_DOSAGE_INSTRUCTION, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ENCOUNTER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getEventHistory())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_EVENT_HISTORY, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getGroupIdentifier())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_GROUP_IDENTIFIER] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_IDENTIFIER, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getInstantiatesCanonical())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INSTANTIATES_CANONICAL, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getInstantiatesUri())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INSTANTIATES_URI, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getInsurance())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_INSURANCE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getIntent())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_INTENT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicationCodeableConcept())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICATION_CODEABLE_CONCEPT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getMedicationReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_MEDICATION_REFERENCE] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NOTE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getPerformer())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERFORMER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPerformerType())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PERFORMER_TYPE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPriorPrescription())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRIOR_PRESCRIPTION] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getPriority())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_PRIORITY] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON_CODE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_REASON_REFERENCE, $i)] = $fieldErrs;
                }
            }
        }
        if (null !== ($v = $this->getRecorder())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_RECORDER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReportedBoolean())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REPORTED_BOOLEAN] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getReportedReference())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REPORTED_REFERENCE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getRequester())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_REQUESTER] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatus())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getStatusReason())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_STATUS_REASON] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubject())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBJECT] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getSubstitution())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_SUBSTITUTION] = $fieldErrs;
            }
        }
        if ([] !== ($vs = $this->getSupportingInformation())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SUPPORTING_INFORMATION, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_AUTHORED_ON])) {
            $v = $this->getAuthoredOn();
            foreach($validationRules[self::FIELD_AUTHORED_ON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_AUTHORED_ON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_AUTHORED_ON])) {
                        $errs[self::FIELD_AUTHORED_ON] = [];
                    }
                    $errs[self::FIELD_AUTHORED_ON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_BASED_ON])) {
            $v = $this->getBasedOn();
            foreach($validationRules[self::FIELD_BASED_ON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_BASED_ON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_BASED_ON])) {
                        $errs[self::FIELD_BASED_ON] = [];
                    }
                    $errs[self::FIELD_BASED_ON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CATEGORY])) {
            $v = $this->getCategory();
            foreach($validationRules[self::FIELD_CATEGORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_CATEGORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CATEGORY])) {
                        $errs[self::FIELD_CATEGORY] = [];
                    }
                    $errs[self::FIELD_CATEGORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_COURSE_OF_THERAPY_TYPE])) {
            $v = $this->getCourseOfTherapyType();
            foreach($validationRules[self::FIELD_COURSE_OF_THERAPY_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_COURSE_OF_THERAPY_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_COURSE_OF_THERAPY_TYPE])) {
                        $errs[self::FIELD_COURSE_OF_THERAPY_TYPE] = [];
                    }
                    $errs[self::FIELD_COURSE_OF_THERAPY_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DETECTED_ISSUE])) {
            $v = $this->getDetectedIssue();
            foreach($validationRules[self::FIELD_DETECTED_ISSUE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_DETECTED_ISSUE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DETECTED_ISSUE])) {
                        $errs[self::FIELD_DETECTED_ISSUE] = [];
                    }
                    $errs[self::FIELD_DETECTED_ISSUE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DISPENSE_REQUEST])) {
            $v = $this->getDispenseRequest();
            foreach($validationRules[self::FIELD_DISPENSE_REQUEST] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_DISPENSE_REQUEST, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DISPENSE_REQUEST])) {
                        $errs[self::FIELD_DISPENSE_REQUEST] = [];
                    }
                    $errs[self::FIELD_DISPENSE_REQUEST][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DO_NOT_PERFORM])) {
            $v = $this->getDoNotPerform();
            foreach($validationRules[self::FIELD_DO_NOT_PERFORM] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_DO_NOT_PERFORM, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DO_NOT_PERFORM])) {
                        $errs[self::FIELD_DO_NOT_PERFORM] = [];
                    }
                    $errs[self::FIELD_DO_NOT_PERFORM][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_DOSAGE_INSTRUCTION])) {
            $v = $this->getDosageInstruction();
            foreach($validationRules[self::FIELD_DOSAGE_INSTRUCTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_DOSAGE_INSTRUCTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_DOSAGE_INSTRUCTION])) {
                        $errs[self::FIELD_DOSAGE_INSTRUCTION] = [];
                    }
                    $errs[self::FIELD_DOSAGE_INSTRUCTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ENCOUNTER])) {
            $v = $this->getEncounter();
            foreach($validationRules[self::FIELD_ENCOUNTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_ENCOUNTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ENCOUNTER])) {
                        $errs[self::FIELD_ENCOUNTER] = [];
                    }
                    $errs[self::FIELD_ENCOUNTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EVENT_HISTORY])) {
            $v = $this->getEventHistory();
            foreach($validationRules[self::FIELD_EVENT_HISTORY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_EVENT_HISTORY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EVENT_HISTORY])) {
                        $errs[self::FIELD_EVENT_HISTORY] = [];
                    }
                    $errs[self::FIELD_EVENT_HISTORY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_GROUP_IDENTIFIER])) {
            $v = $this->getGroupIdentifier();
            foreach($validationRules[self::FIELD_GROUP_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_GROUP_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_GROUP_IDENTIFIER])) {
                        $errs[self::FIELD_GROUP_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_GROUP_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IDENTIFIER])) {
            $v = $this->getIdentifier();
            foreach($validationRules[self::FIELD_IDENTIFIER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_IDENTIFIER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IDENTIFIER])) {
                        $errs[self::FIELD_IDENTIFIER] = [];
                    }
                    $errs[self::FIELD_IDENTIFIER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSTANTIATES_CANONICAL])) {
            $v = $this->getInstantiatesCanonical();
            foreach($validationRules[self::FIELD_INSTANTIATES_CANONICAL] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_INSTANTIATES_CANONICAL, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSTANTIATES_CANONICAL])) {
                        $errs[self::FIELD_INSTANTIATES_CANONICAL] = [];
                    }
                    $errs[self::FIELD_INSTANTIATES_CANONICAL][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSTANTIATES_URI])) {
            $v = $this->getInstantiatesUri();
            foreach($validationRules[self::FIELD_INSTANTIATES_URI] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_INSTANTIATES_URI, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSTANTIATES_URI])) {
                        $errs[self::FIELD_INSTANTIATES_URI] = [];
                    }
                    $errs[self::FIELD_INSTANTIATES_URI][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INSURANCE])) {
            $v = $this->getInsurance();
            foreach($validationRules[self::FIELD_INSURANCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_INSURANCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INSURANCE])) {
                        $errs[self::FIELD_INSURANCE] = [];
                    }
                    $errs[self::FIELD_INSURANCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_INTENT])) {
            $v = $this->getIntent();
            foreach($validationRules[self::FIELD_INTENT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_INTENT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_INTENT])) {
                        $errs[self::FIELD_INTENT] = [];
                    }
                    $errs[self::FIELD_INTENT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEDICATION_CODEABLE_CONCEPT])) {
            $v = $this->getMedicationCodeableConcept();
            foreach($validationRules[self::FIELD_MEDICATION_CODEABLE_CONCEPT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_MEDICATION_CODEABLE_CONCEPT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEDICATION_CODEABLE_CONCEPT])) {
                        $errs[self::FIELD_MEDICATION_CODEABLE_CONCEPT] = [];
                    }
                    $errs[self::FIELD_MEDICATION_CODEABLE_CONCEPT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MEDICATION_REFERENCE])) {
            $v = $this->getMedicationReference();
            foreach($validationRules[self::FIELD_MEDICATION_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_MEDICATION_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MEDICATION_REFERENCE])) {
                        $errs[self::FIELD_MEDICATION_REFERENCE] = [];
                    }
                    $errs[self::FIELD_MEDICATION_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NOTE])) {
            $v = $this->getNote();
            foreach($validationRules[self::FIELD_NOTE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_NOTE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NOTE])) {
                        $errs[self::FIELD_NOTE] = [];
                    }
                    $errs[self::FIELD_NOTE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMER])) {
            $v = $this->getPerformer();
            foreach($validationRules[self::FIELD_PERFORMER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_PERFORMER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER])) {
                        $errs[self::FIELD_PERFORMER] = [];
                    }
                    $errs[self::FIELD_PERFORMER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PERFORMER_TYPE])) {
            $v = $this->getPerformerType();
            foreach($validationRules[self::FIELD_PERFORMER_TYPE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_PERFORMER_TYPE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PERFORMER_TYPE])) {
                        $errs[self::FIELD_PERFORMER_TYPE] = [];
                    }
                    $errs[self::FIELD_PERFORMER_TYPE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIOR_PRESCRIPTION])) {
            $v = $this->getPriorPrescription();
            foreach($validationRules[self::FIELD_PRIOR_PRESCRIPTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_PRIOR_PRESCRIPTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRIOR_PRESCRIPTION])) {
                        $errs[self::FIELD_PRIOR_PRESCRIPTION] = [];
                    }
                    $errs[self::FIELD_PRIOR_PRESCRIPTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRIORITY])) {
            $v = $this->getPriority();
            foreach($validationRules[self::FIELD_PRIORITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_PRIORITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRIORITY])) {
                        $errs[self::FIELD_PRIORITY] = [];
                    }
                    $errs[self::FIELD_PRIORITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_CODE])) {
            $v = $this->getReasonCode();
            foreach($validationRules[self::FIELD_REASON_CODE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_REASON_CODE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_CODE])) {
                        $errs[self::FIELD_REASON_CODE] = [];
                    }
                    $errs[self::FIELD_REASON_CODE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REASON_REFERENCE])) {
            $v = $this->getReasonReference();
            foreach($validationRules[self::FIELD_REASON_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_REASON_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REASON_REFERENCE])) {
                        $errs[self::FIELD_REASON_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REASON_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_RECORDER])) {
            $v = $this->getRecorder();
            foreach($validationRules[self::FIELD_RECORDER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_RECORDER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_RECORDER])) {
                        $errs[self::FIELD_RECORDER] = [];
                    }
                    $errs[self::FIELD_RECORDER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPORTED_BOOLEAN])) {
            $v = $this->getReportedBoolean();
            foreach($validationRules[self::FIELD_REPORTED_BOOLEAN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_REPORTED_BOOLEAN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPORTED_BOOLEAN])) {
                        $errs[self::FIELD_REPORTED_BOOLEAN] = [];
                    }
                    $errs[self::FIELD_REPORTED_BOOLEAN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REPORTED_REFERENCE])) {
            $v = $this->getReportedReference();
            foreach($validationRules[self::FIELD_REPORTED_REFERENCE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_REPORTED_REFERENCE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REPORTED_REFERENCE])) {
                        $errs[self::FIELD_REPORTED_REFERENCE] = [];
                    }
                    $errs[self::FIELD_REPORTED_REFERENCE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_REQUESTER])) {
            $v = $this->getRequester();
            foreach($validationRules[self::FIELD_REQUESTER] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_REQUESTER, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_REQUESTER])) {
                        $errs[self::FIELD_REQUESTER] = [];
                    }
                    $errs[self::FIELD_REQUESTER][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS])) {
            $v = $this->getStatus();
            foreach($validationRules[self::FIELD_STATUS] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_STATUS, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS])) {
                        $errs[self::FIELD_STATUS] = [];
                    }
                    $errs[self::FIELD_STATUS][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_STATUS_REASON])) {
            $v = $this->getStatusReason();
            foreach($validationRules[self::FIELD_STATUS_REASON] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_STATUS_REASON, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_STATUS_REASON])) {
                        $errs[self::FIELD_STATUS_REASON] = [];
                    }
                    $errs[self::FIELD_STATUS_REASON][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBJECT])) {
            $v = $this->getSubject();
            foreach($validationRules[self::FIELD_SUBJECT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_SUBJECT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBJECT])) {
                        $errs[self::FIELD_SUBJECT] = [];
                    }
                    $errs[self::FIELD_SUBJECT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUBSTITUTION])) {
            $v = $this->getSubstitution();
            foreach($validationRules[self::FIELD_SUBSTITUTION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_SUBSTITUTION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUBSTITUTION])) {
                        $errs[self::FIELD_SUBSTITUTION] = [];
                    }
                    $errs[self::FIELD_SUBSTITUTION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SUPPORTING_INFORMATION])) {
            $v = $this->getSupportingInformation();
            foreach($validationRules[self::FIELD_SUPPORTING_INFORMATION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MEDICATION_REQUEST, self::FIELD_SUPPORTING_INFORMATION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SUPPORTING_INFORMATION])) {
                        $errs[self::FIELD_SUPPORTING_INFORMATION] = [];
                    }
                    $errs[self::FIELD_SUPPORTING_INFORMATION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_CONTAINED])) {
            $v = $this->getContained();
            foreach($validationRules[self::FIELD_CONTAINED] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_CONTAINED, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_CONTAINED])) {
                        $errs[self::FIELD_CONTAINED] = [];
                    }
                    $errs[self::FIELD_CONTAINED][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_TEXT])) {
            $v = $this->getText();
            foreach($validationRules[self::FIELD_TEXT] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_DOMAIN_RESOURCE, self::FIELD_TEXT, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_TEXT])) {
                        $errs[self::FIELD_TEXT] = [];
                    }
                    $errs[self::FIELD_TEXT][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_IMPLICIT_RULES])) {
            $v = $this->getImplicitRules();
            foreach($validationRules[self::FIELD_IMPLICIT_RULES] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_IMPLICIT_RULES, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_IMPLICIT_RULES])) {
                        $errs[self::FIELD_IMPLICIT_RULES] = [];
                    }
                    $errs[self::FIELD_IMPLICIT_RULES][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LANGUAGE])) {
            $v = $this->getLanguage();
            foreach($validationRules[self::FIELD_LANGUAGE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_LANGUAGE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LANGUAGE])) {
                        $errs[self::FIELD_LANGUAGE] = [];
                    }
                    $errs[self::FIELD_LANGUAGE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_META])) {
            $v = $this->getMeta();
            foreach($validationRules[self::FIELD_META] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_RESOURCE, self::FIELD_META, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_META])) {
                        $errs[self::FIELD_META] = [];
                    }
                    $errs[self::FIELD_META][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationRequest $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationRequest
     */
    public static function xmlUnserialize($sxe = null, PHPFHIRTypeInterface $type = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            return null;
        }
        if (is_string($sxe)) {
            libxml_use_internal_errors(true);
            $sxe = new \SimpleXMLElement($sxe, $libxmlOpts, false);
            if ($sxe === false) {
                throw new \DomainException(sprintf('FHIRMedicationRequest::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMedicationRequest::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMedicationRequest;
        } elseif (!is_object($type) || !($type instanceof FHIRMedicationRequest)) {
            throw new \RuntimeException(sprintf(
                'FHIRMedicationRequest::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRResource\FHIRDomainResource\FHIRMedicationRequest or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRDomainResource::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->authoredOn)) {
            $type->setAuthoredOn(FHIRDateTime::xmlUnserialize($children->authoredOn));
        }
        if (isset($attributes->authoredOn)) {
            $pt = $type->getAuthoredOn();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->authoredOn);
            } else {
                $type->setAuthoredOn((string)$attributes->authoredOn);
            }
        }
        if (isset($children->basedOn)) {
            foreach($children->basedOn as $child) {
                $type->addBasedOn(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->category)) {
            foreach($children->category as $child) {
                $type->addCategory(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->courseOfTherapyType)) {
            $type->setCourseOfTherapyType(FHIRCodeableConcept::xmlUnserialize($children->courseOfTherapyType));
        }
        if (isset($children->detectedIssue)) {
            foreach($children->detectedIssue as $child) {
                $type->addDetectedIssue(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->dispenseRequest)) {
            $type->setDispenseRequest(FHIRMedicationRequestDispenseRequest::xmlUnserialize($children->dispenseRequest));
        }
        if (isset($children->doNotPerform)) {
            $type->setDoNotPerform(FHIRBoolean::xmlUnserialize($children->doNotPerform));
        }
        if (isset($attributes->doNotPerform)) {
            $pt = $type->getDoNotPerform();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->doNotPerform);
            } else {
                $type->setDoNotPerform((string)$attributes->doNotPerform);
            }
        }
        if (isset($children->dosageInstruction)) {
            foreach($children->dosageInstruction as $child) {
                $type->addDosageInstruction(FHIRDosage::xmlUnserialize($child));
            }
        }
        if (isset($children->encounter)) {
            $type->setEncounter(FHIRReference::xmlUnserialize($children->encounter));
        }
        if (isset($children->eventHistory)) {
            foreach($children->eventHistory as $child) {
                $type->addEventHistory(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->groupIdentifier)) {
            $type->setGroupIdentifier(FHIRIdentifier::xmlUnserialize($children->groupIdentifier));
        }
        if (isset($children->identifier)) {
            foreach($children->identifier as $child) {
                $type->addIdentifier(FHIRIdentifier::xmlUnserialize($child));
            }
        }
        if (isset($children->instantiatesCanonical)) {
            foreach($children->instantiatesCanonical as $child) {
                $type->addInstantiatesCanonical(FHIRCanonical::xmlUnserialize($child));
            }
        }
        if (isset($children->instantiatesUri)) {
            foreach($children->instantiatesUri as $child) {
                $type->addInstantiatesUri(FHIRUri::xmlUnserialize($child));
            }
        }
        if (isset($children->insurance)) {
            foreach($children->insurance as $child) {
                $type->addInsurance(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->intent)) {
            $type->setIntent(FHIRMedicationRequestIntent::xmlUnserialize($children->intent));
        }
        if (isset($children->medicationCodeableConcept)) {
            $type->setMedicationCodeableConcept(FHIRCodeableConcept::xmlUnserialize($children->medicationCodeableConcept));
        }
        if (isset($children->medicationReference)) {
            $type->setMedicationReference(FHIRReference::xmlUnserialize($children->medicationReference));
        }
        if (isset($children->note)) {
            foreach($children->note as $child) {
                $type->addNote(FHIRAnnotation::xmlUnserialize($child));
            }
        }
        if (isset($children->performer)) {
            $type->setPerformer(FHIRReference::xmlUnserialize($children->performer));
        }
        if (isset($children->performerType)) {
            $type->setPerformerType(FHIRCodeableConcept::xmlUnserialize($children->performerType));
        }
        if (isset($children->priorPrescription)) {
            $type->setPriorPrescription(FHIRReference::xmlUnserialize($children->priorPrescription));
        }
        if (isset($children->priority)) {
            $type->setPriority(FHIRRequestPriority::xmlUnserialize($children->priority));
        }
        if (isset($children->reasonCode)) {
            foreach($children->reasonCode as $child) {
                $type->addReasonCode(FHIRCodeableConcept::xmlUnserialize($child));
            }
        }
        if (isset($children->reasonReference)) {
            foreach($children->reasonReference as $child) {
                $type->addReasonReference(FHIRReference::xmlUnserialize($child));
            }
        }
        if (isset($children->recorder)) {
            $type->setRecorder(FHIRReference::xmlUnserialize($children->recorder));
        }
        if (isset($children->reportedBoolean)) {
            $type->setReportedBoolean(FHIRBoolean::xmlUnserialize($children->reportedBoolean));
        }
        if (isset($attributes->reportedBoolean)) {
            $pt = $type->getReportedBoolean();
            if (null !== $pt) {
                $pt->setValue((string)$attributes->reportedBoolean);
            } else {
                $type->setReportedBoolean((string)$attributes->reportedBoolean);
            }
        }
        if (isset($children->reportedReference)) {
            $type->setReportedReference(FHIRReference::xmlUnserialize($children->reportedReference));
        }
        if (isset($children->requester)) {
            $type->setRequester(FHIRReference::xmlUnserialize($children->requester));
        }
        if (isset($children->status)) {
            $type->setStatus(FHIRMedicationrequestStatus::xmlUnserialize($children->status));
        }
        if (isset($children->statusReason)) {
            $type->setStatusReason(FHIRCodeableConcept::xmlUnserialize($children->statusReason));
        }
        if (isset($children->subject)) {
            $type->setSubject(FHIRReference::xmlUnserialize($children->subject));
        }
        if (isset($children->substitution)) {
            $type->setSubstitution(FHIRMedicationRequestSubstitution::xmlUnserialize($children->substitution));
        }
        if (isset($children->supportingInformation)) {
            foreach($children->supportingInformation as $child) {
                $type->addSupportingInformation(FHIRReference::xmlUnserialize($child));
            }
        }
        return $type;
    }

    /**
     * @param null|\SimpleXMLElement $sxe
     * @param null|int $libxmlOpts
     * @return \SimpleXMLElement
     */
    public function xmlSerialize(\SimpleXMLElement $sxe = null, $libxmlOpts = 591872)
    {
        if (null === $sxe) {
            $sxe = new \SimpleXMLElement($this->_getFHIRXMLElementDefinition(), $libxmlOpts, false);
        }
        parent::xmlSerialize($sxe);
        if (null !== ($v = $this->getAuthoredOn())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_AUTHORED_ON, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getBasedOn())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_BASED_ON, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getCategory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_CATEGORY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getCourseOfTherapyType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_COURSE_OF_THERAPY_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getDetectedIssue())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DETECTED_ISSUE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getDispenseRequest())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DISPENSE_REQUEST, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getDoNotPerform())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_DO_NOT_PERFORM, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getDosageInstruction())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_DOSAGE_INSTRUCTION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_ENCOUNTER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getEventHistory())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_EVENT_HISTORY, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getGroupIdentifier())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_GROUP_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_IDENTIFIER, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getInstantiatesCanonical())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INSTANTIATES_CANONICAL, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getInstantiatesUri())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INSTANTIATES_URI, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getInsurance())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_INSURANCE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getIntent())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_INTENT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMedicationCodeableConcept())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MEDICATION_CODEABLE_CONCEPT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getMedicationReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_MEDICATION_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getNote())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NOTE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getPerformer())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERFORMER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPerformerType())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PERFORMER_TYPE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPriorPrescription())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRIOR_PRESCRIPTION, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getPriority())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_PRIORITY, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_CODE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_REASON_REFERENCE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if (null !== ($v = $this->getRecorder())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_RECORDER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReportedBoolean())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REPORTED_BOOLEAN, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getReportedReference())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REPORTED_REFERENCE, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getRequester())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_REQUESTER, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatus())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getStatusReason())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_STATUS_REASON, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubject())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBJECT, null, $v->_getFHIRXMLNamespace()));
        }
        if (null !== ($v = $this->getSubstitution())) {
            $v->xmlSerialize($sxe->addChild(self::FIELD_SUBSTITUTION, null, $v->_getFHIRXMLNamespace()));
        }
        if ([] !== ($vs = $this->getSupportingInformation())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SUPPORTING_INFORMATION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        return $sxe;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $a = parent::jsonSerialize();
        if (null !== ($v = $this->getAuthoredOn())) {
            $a[self::FIELD_AUTHORED_ON] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRDateTime::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRDateTime::FIELD_VALUE]);
                $a[self::FIELD_AUTHORED_ON_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getBasedOn())) {
            $a[self::FIELD_BASED_ON] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_BASED_ON][] = $v;
            }
        }
        if ([] !== ($vs = $this->getCategory())) {
            $a[self::FIELD_CATEGORY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_CATEGORY][] = $v;
            }
        }
        if (null !== ($v = $this->getCourseOfTherapyType())) {
            $a[self::FIELD_COURSE_OF_THERAPY_TYPE] = $v;
        }
        if ([] !== ($vs = $this->getDetectedIssue())) {
            $a[self::FIELD_DETECTED_ISSUE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DETECTED_ISSUE][] = $v;
            }
        }
        if (null !== ($v = $this->getDispenseRequest())) {
            $a[self::FIELD_DISPENSE_REQUEST] = $v;
        }
        if (null !== ($v = $this->getDoNotPerform())) {
            $a[self::FIELD_DO_NOT_PERFORM] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_DO_NOT_PERFORM_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getDosageInstruction())) {
            $a[self::FIELD_DOSAGE_INSTRUCTION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_DOSAGE_INSTRUCTION][] = $v;
            }
        }
        if (null !== ($v = $this->getEncounter())) {
            $a[self::FIELD_ENCOUNTER] = $v;
        }
        if ([] !== ($vs = $this->getEventHistory())) {
            $a[self::FIELD_EVENT_HISTORY] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_EVENT_HISTORY][] = $v;
            }
        }
        if (null !== ($v = $this->getGroupIdentifier())) {
            $a[self::FIELD_GROUP_IDENTIFIER] = $v;
        }
        if ([] !== ($vs = $this->getIdentifier())) {
            $a[self::FIELD_IDENTIFIER] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_IDENTIFIER][] = $v;
            }
        }
        if ([] !== ($vs = $this->getInstantiatesCanonical())) {
            $a[self::FIELD_INSTANTIATES_CANONICAL] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_INSTANTIATES_CANONICAL][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRCanonical::FIELD_VALUE]) || array_key_exists(FHIRCanonical::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRCanonical::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_INSTANTIATES_CANONICAL_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getInstantiatesUri())) {
            $a[self::FIELD_INSTANTIATES_URI] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_INSTANTIATES_URI][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRUri::FIELD_VALUE]) || array_key_exists(FHIRUri::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRUri::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_INSTANTIATES_URI_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getInsurance())) {
            $a[self::FIELD_INSURANCE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_INSURANCE][] = $v;
            }
        }
        if (null !== ($v = $this->getIntent())) {
            $a[self::FIELD_INTENT] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMedicationRequestIntent::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMedicationRequestIntent::FIELD_VALUE]);
                $a[self::FIELD_INTENT_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getMedicationCodeableConcept())) {
            $a[self::FIELD_MEDICATION_CODEABLE_CONCEPT] = $v;
        }
        if (null !== ($v = $this->getMedicationReference())) {
            $a[self::FIELD_MEDICATION_REFERENCE] = $v;
        }
        if ([] !== ($vs = $this->getNote())) {
            $a[self::FIELD_NOTE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_NOTE][] = $v;
            }
        }
        if (null !== ($v = $this->getPerformer())) {
            $a[self::FIELD_PERFORMER] = $v;
        }
        if (null !== ($v = $this->getPerformerType())) {
            $a[self::FIELD_PERFORMER_TYPE] = $v;
        }
        if (null !== ($v = $this->getPriorPrescription())) {
            $a[self::FIELD_PRIOR_PRESCRIPTION] = $v;
        }
        if (null !== ($v = $this->getPriority())) {
            $a[self::FIELD_PRIORITY] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRRequestPriority::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRRequestPriority::FIELD_VALUE]);
                $a[self::FIELD_PRIORITY_EXT] = $enc;
            }
        }
        if ([] !== ($vs = $this->getReasonCode())) {
            $a[self::FIELD_REASON_CODE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REASON_CODE][] = $v;
            }
        }
        if ([] !== ($vs = $this->getReasonReference())) {
            $a[self::FIELD_REASON_REFERENCE] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_REASON_REFERENCE][] = $v;
            }
        }
        if (null !== ($v = $this->getRecorder())) {
            $a[self::FIELD_RECORDER] = $v;
        }
        if (null !== ($v = $this->getReportedBoolean())) {
            $a[self::FIELD_REPORTED_BOOLEAN] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRBoolean::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRBoolean::FIELD_VALUE]);
                $a[self::FIELD_REPORTED_BOOLEAN_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getReportedReference())) {
            $a[self::FIELD_REPORTED_REFERENCE] = $v;
        }
        if (null !== ($v = $this->getRequester())) {
            $a[self::FIELD_REQUESTER] = $v;
        }
        if (null !== ($v = $this->getStatus())) {
            $a[self::FIELD_STATUS] = $v->getValue();
            $enc = $v->jsonSerialize();
            $cnt = count($enc);
            if (0 < $cnt && (1 !== $cnt || (1 === $cnt && !array_key_exists(FHIRMedicationrequestStatus::FIELD_VALUE, $enc)))) {
                unset($enc[FHIRMedicationrequestStatus::FIELD_VALUE]);
                $a[self::FIELD_STATUS_EXT] = $enc;
            }
        }
        if (null !== ($v = $this->getStatusReason())) {
            $a[self::FIELD_STATUS_REASON] = $v;
        }
        if (null !== ($v = $this->getSubject())) {
            $a[self::FIELD_SUBJECT] = $v;
        }
        if (null !== ($v = $this->getSubstitution())) {
            $a[self::FIELD_SUBSTITUTION] = $v;
        }
        if ([] !== ($vs = $this->getSupportingInformation())) {
            $a[self::FIELD_SUPPORTING_INFORMATION] = [];
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SUPPORTING_INFORMATION][] = $v;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return [PHPFHIRConstants::JSON_FIELD_RESOURCE_TYPE => $this->_getResourceType()] + $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}