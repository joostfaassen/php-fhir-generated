<?php namespace PHPFHIRGenerated\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: February 10th, 2018
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2018 Daniel Carbone (daniel.p.carbone@gmail.com)
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
 *   Generated on Sat, Feb 10, 2018 20:53+0000 for FHIR v3.2.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use PHPFHIRGenerated\FHIRResource\FHIRDomainResource;

/**
 * A specific set of Roles/Locations/specialties/services that a practitioner may perform at an organization for a period of time.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIROrganizationRole extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Business Identifiers that are specific to a role/location.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * Whether this practitioner role record is in active use.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $active = null;

    /**
     * The period during which the person is authorized to act as a practitioner in these role(s) for the organization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * The organization where the Practitioner performs the roles associated.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $organization = null;

    /**
     * Practitioner that is able to provide the defined services for the organization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $participatingOrganization = null;

    /**
     * The network(s) this association applies to (if any).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $network = [];

    /**
     * Roles which this practitioner is authorized to perform for the organization.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $code = [];

    /**
     * Specific specialty of the practitioner.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public $specialty = [];

    /**
     * The location(s) at which this practitioner provides care.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $location = [];

    /**
     * The list of healthcare services that this worker provides for this role's Organization/Location(s).
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $healthcareService = [];

    /**
     * Contact details that are specific to the role/location/service.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    public $telecom = [];

    /**
     * A collection of times that the Service Site is available.
     * @var \PHPFHIRGenerated\FHIRResource\FHIROrganizationRole\FHIROrganizationRoleAvailableTime[]
     */
    public $availableTime = [];

    /**
     * The HealthcareService is not available during this period of time due to the provided reason.
     * @var \PHPFHIRGenerated\FHIRResource\FHIROrganizationRole\FHIROrganizationRoleNotAvailable[]
     */
    public $notAvailable = [];

    /**
     * A description of site availability exceptions, e.g. public holiday availability. Succinctly describing all possible exceptions to normal site availability as details in the available Times and not available Times.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $availabilityExceptions = null;

    /**
     * Technical endpoints providing access to services operated for the practitioner with this role.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public $endpoint = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'OrganizationRole';

    /**
     * Business Identifiers that are specific to a role/location.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Business Identifiers that are specific to a role/location.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * Whether this practitioner role record is in active use.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getActive() {
        return $this->active;
    }

    /**
     * Whether this practitioner role record is in active use.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $active
     * @return $this
     */
    public function setActive($active) {
        $this->active = $active;
        return $this;
    }

    /**
     * The period during which the person is authorized to act as a practitioner in these role(s) for the organization.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRPeriod
     */
    public function getPeriod() {
        return $this->period;
    }

    /**
     * The period during which the person is authorized to act as a practitioner in these role(s) for the organization.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period) {
        $this->period = $period;
        return $this;
    }

    /**
     * The organization where the Practitioner performs the roles associated.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getOrganization() {
        return $this->organization;
    }

    /**
     * The organization where the Practitioner performs the roles associated.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $organization
     * @return $this
     */
    public function setOrganization($organization) {
        $this->organization = $organization;
        return $this;
    }

    /**
     * Practitioner that is able to provide the defined services for the organization.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getParticipatingOrganization() {
        return $this->participatingOrganization;
    }

    /**
     * Practitioner that is able to provide the defined services for the organization.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $participatingOrganization
     * @return $this
     */
    public function setParticipatingOrganization($participatingOrganization) {
        $this->participatingOrganization = $participatingOrganization;
        return $this;
    }

    /**
     * The network(s) this association applies to (if any).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getNetwork() {
        return $this->network;
    }

    /**
     * The network(s) this association applies to (if any).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $network
     * @return $this
     */
    public function addNetwork($network) {
        $this->network[] = $network;
        return $this;
    }

    /**
     * Roles which this practitioner is authorized to perform for the organization.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Roles which this practitioner is authorized to perform for the organization.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $code
     * @return $this
     */
    public function addCode($code) {
        $this->code[] = $code;
        return $this;
    }

    /**
     * Specific specialty of the practitioner.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSpecialty() {
        return $this->specialty;
    }

    /**
     * Specific specialty of the practitioner.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRCodeableConcept $specialty
     * @return $this
     */
    public function addSpecialty($specialty) {
        $this->specialty[] = $specialty;
        return $this;
    }

    /**
     * The location(s) at which this practitioner provides care.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getLocation() {
        return $this->location;
    }

    /**
     * The location(s) at which this practitioner provides care.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $location
     * @return $this
     */
    public function addLocation($location) {
        $this->location[] = $location;
        return $this;
    }

    /**
     * The list of healthcare services that this worker provides for this role's Organization/Location(s).
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getHealthcareService() {
        return $this->healthcareService;
    }

    /**
     * The list of healthcare services that this worker provides for this role's Organization/Location(s).
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $healthcareService
     * @return $this
     */
    public function addHealthcareService($healthcareService) {
        $this->healthcareService[] = $healthcareService;
        return $this;
    }

    /**
     * Contact details that are specific to the role/location/service.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRContactPoint[]
     */
    public function getTelecom() {
        return $this->telecom;
    }

    /**
     * Contact details that are specific to the role/location/service.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRContactPoint $telecom
     * @return $this
     */
    public function addTelecom($telecom) {
        $this->telecom[] = $telecom;
        return $this;
    }

    /**
     * A collection of times that the Service Site is available.
     * @return \PHPFHIRGenerated\FHIRResource\FHIROrganizationRole\FHIROrganizationRoleAvailableTime[]
     */
    public function getAvailableTime() {
        return $this->availableTime;
    }

    /**
     * A collection of times that the Service Site is available.
     * @param \PHPFHIRGenerated\FHIRResource\FHIROrganizationRole\FHIROrganizationRoleAvailableTime $availableTime
     * @return $this
     */
    public function addAvailableTime($availableTime) {
        $this->availableTime[] = $availableTime;
        return $this;
    }

    /**
     * The HealthcareService is not available during this period of time due to the provided reason.
     * @return \PHPFHIRGenerated\FHIRResource\FHIROrganizationRole\FHIROrganizationRoleNotAvailable[]
     */
    public function getNotAvailable() {
        return $this->notAvailable;
    }

    /**
     * The HealthcareService is not available during this period of time due to the provided reason.
     * @param \PHPFHIRGenerated\FHIRResource\FHIROrganizationRole\FHIROrganizationRoleNotAvailable $notAvailable
     * @return $this
     */
    public function addNotAvailable($notAvailable) {
        $this->notAvailable[] = $notAvailable;
        return $this;
    }

    /**
     * A description of site availability exceptions, e.g. public holiday availability. Succinctly describing all possible exceptions to normal site availability as details in the available Times and not available Times.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getAvailabilityExceptions() {
        return $this->availabilityExceptions;
    }

    /**
     * A description of site availability exceptions, e.g. public holiday availability. Succinctly describing all possible exceptions to normal site availability as details in the available Times and not available Times.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $availabilityExceptions
     * @return $this
     */
    public function setAvailabilityExceptions($availabilityExceptions) {
        $this->availabilityExceptions = $availabilityExceptions;
        return $this;
    }

    /**
     * Technical endpoints providing access to services operated for the practitioner with this role.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference[]
     */
    public function getEndpoint() {
        return $this->endpoint;
    }

    /**
     * Technical endpoints providing access to services operated for the practitioner with this role.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $endpoint
     * @return $this
     */
    public function addEndpoint($endpoint) {
        $this->endpoint[] = $endpoint;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['identifier'])) {
                if (is_array($data['identifier'])) {
                    foreach($data['identifier'] as $d) {
                        $this->addIdentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"identifier" must be array of objects or null, '.gettype($data['identifier']).' seen.');
                }
            }
            if (isset($data['active'])) {
                $this->setActive($data['active']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['organization'])) {
                $this->setOrganization($data['organization']);
            }
            if (isset($data['participatingOrganization'])) {
                $this->setParticipatingOrganization($data['participatingOrganization']);
            }
            if (isset($data['network'])) {
                if (is_array($data['network'])) {
                    foreach($data['network'] as $d) {
                        $this->addNetwork($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"network" must be array of objects or null, '.gettype($data['network']).' seen.');
                }
            }
            if (isset($data['code'])) {
                if (is_array($data['code'])) {
                    foreach($data['code'] as $d) {
                        $this->addCode($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"code" must be array of objects or null, '.gettype($data['code']).' seen.');
                }
            }
            if (isset($data['specialty'])) {
                if (is_array($data['specialty'])) {
                    foreach($data['specialty'] as $d) {
                        $this->addSpecialty($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"specialty" must be array of objects or null, '.gettype($data['specialty']).' seen.');
                }
            }
            if (isset($data['location'])) {
                if (is_array($data['location'])) {
                    foreach($data['location'] as $d) {
                        $this->addLocation($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"location" must be array of objects or null, '.gettype($data['location']).' seen.');
                }
            }
            if (isset($data['healthcareService'])) {
                if (is_array($data['healthcareService'])) {
                    foreach($data['healthcareService'] as $d) {
                        $this->addHealthcareService($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"healthcareService" must be array of objects or null, '.gettype($data['healthcareService']).' seen.');
                }
            }
            if (isset($data['telecom'])) {
                if (is_array($data['telecom'])) {
                    foreach($data['telecom'] as $d) {
                        $this->addTelecom($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"telecom" must be array of objects or null, '.gettype($data['telecom']).' seen.');
                }
            }
            if (isset($data['availableTime'])) {
                if (is_array($data['availableTime'])) {
                    foreach($data['availableTime'] as $d) {
                        $this->addAvailableTime($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"availableTime" must be array of objects or null, '.gettype($data['availableTime']).' seen.');
                }
            }
            if (isset($data['notAvailable'])) {
                if (is_array($data['notAvailable'])) {
                    foreach($data['notAvailable'] as $d) {
                        $this->addNotAvailable($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"notAvailable" must be array of objects or null, '.gettype($data['notAvailable']).' seen.');
                }
            }
            if (isset($data['availabilityExceptions'])) {
                $this->setAvailabilityExceptions($data['availabilityExceptions']);
            }
            if (isset($data['endpoint'])) {
                if (is_array($data['endpoint'])) {
                    foreach($data['endpoint'] as $d) {
                        $this->addEndpoint($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"endpoint" must be array of objects or null, '.gettype($data['endpoint']).' seen.');
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                if (null !== $identifier) $json['identifier'][] = $identifier;
            }
        }
        if (isset($this->active)) $json['active'] = $this->active;
        if (isset($this->period)) $json['period'] = $this->period;
        if (isset($this->organization)) $json['organization'] = $this->organization;
        if (isset($this->participatingOrganization)) $json['participatingOrganization'] = $this->participatingOrganization;
        if (0 < count($this->network)) {
            $json['network'] = [];
            foreach($this->network as $network) {
                if (null !== $network) $json['network'][] = $network;
            }
        }
        if (0 < count($this->code)) {
            $json['code'] = [];
            foreach($this->code as $code) {
                if (null !== $code) $json['code'][] = $code;
            }
        }
        if (0 < count($this->specialty)) {
            $json['specialty'] = [];
            foreach($this->specialty as $specialty) {
                if (null !== $specialty) $json['specialty'][] = $specialty;
            }
        }
        if (0 < count($this->location)) {
            $json['location'] = [];
            foreach($this->location as $location) {
                if (null !== $location) $json['location'][] = $location;
            }
        }
        if (0 < count($this->healthcareService)) {
            $json['healthcareService'] = [];
            foreach($this->healthcareService as $healthcareService) {
                if (null !== $healthcareService) $json['healthcareService'][] = $healthcareService;
            }
        }
        if (0 < count($this->telecom)) {
            $json['telecom'] = [];
            foreach($this->telecom as $telecom) {
                if (null !== $telecom) $json['telecom'][] = $telecom;
            }
        }
        if (0 < count($this->availableTime)) {
            $json['availableTime'] = [];
            foreach($this->availableTime as $availableTime) {
                if (null !== $availableTime) $json['availableTime'][] = $availableTime;
            }
        }
        if (0 < count($this->notAvailable)) {
            $json['notAvailable'] = [];
            foreach($this->notAvailable as $notAvailable) {
                if (null !== $notAvailable) $json['notAvailable'][] = $notAvailable;
            }
        }
        if (isset($this->availabilityExceptions)) $json['availabilityExceptions'] = $this->availabilityExceptions;
        if (0 < count($this->endpoint)) {
            $json['endpoint'] = [];
            foreach($this->endpoint as $endpoint) {
                if (null !== $endpoint) $json['endpoint'][] = $endpoint;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<OrganizationRole xmlns="http://hl7.org/fhir"></OrganizationRole>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->active)) $this->active->xmlSerialize(true, $sxe->addChild('active'));
        if (isset($this->period)) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (isset($this->organization)) $this->organization->xmlSerialize(true, $sxe->addChild('organization'));
        if (isset($this->participatingOrganization)) $this->participatingOrganization->xmlSerialize(true, $sxe->addChild('participatingOrganization'));
        if (0 < count($this->network)) {
            foreach($this->network as $network) {
                $network->xmlSerialize(true, $sxe->addChild('network'));
            }
        }
        if (0 < count($this->code)) {
            foreach($this->code as $code) {
                $code->xmlSerialize(true, $sxe->addChild('code'));
            }
        }
        if (0 < count($this->specialty)) {
            foreach($this->specialty as $specialty) {
                $specialty->xmlSerialize(true, $sxe->addChild('specialty'));
            }
        }
        if (0 < count($this->location)) {
            foreach($this->location as $location) {
                $location->xmlSerialize(true, $sxe->addChild('location'));
            }
        }
        if (0 < count($this->healthcareService)) {
            foreach($this->healthcareService as $healthcareService) {
                $healthcareService->xmlSerialize(true, $sxe->addChild('healthcareService'));
            }
        }
        if (0 < count($this->telecom)) {
            foreach($this->telecom as $telecom) {
                $telecom->xmlSerialize(true, $sxe->addChild('telecom'));
            }
        }
        if (0 < count($this->availableTime)) {
            foreach($this->availableTime as $availableTime) {
                $availableTime->xmlSerialize(true, $sxe->addChild('availableTime'));
            }
        }
        if (0 < count($this->notAvailable)) {
            foreach($this->notAvailable as $notAvailable) {
                $notAvailable->xmlSerialize(true, $sxe->addChild('notAvailable'));
            }
        }
        if (isset($this->availabilityExceptions)) $this->availabilityExceptions->xmlSerialize(true, $sxe->addChild('availabilityExceptions'));
        if (0 < count($this->endpoint)) {
            foreach($this->endpoint as $endpoint) {
                $endpoint->xmlSerialize(true, $sxe->addChild('endpoint'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}