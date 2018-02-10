<?php namespace PHPFHIRGenerated\FHIRResource\FHIRImplementationGuideOutput;

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

use PHPFHIRGenerated\FHIRElement\FHIRBackboneElement;

/**
 * A set of rules of how FHIR is used to solve a particular problem. This resource is used to gather all the parts of an implementation guide into a logical whole and to publish a computable definition of all the parts.
 */
class FHIRImplementationGuideOutputResource extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Where this resource is found.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $reference = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public $exampleBoolean = null;

    /**
     * @var \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public $exampleReference = null;

    /**
     * The relative path for primary page for this resource within the IG.
     * @var \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public $relativePath = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'ImplementationGuideOutput.Resource';

    /**
     * Where this resource is found.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getReference() {
        return $this->reference;
    }

    /**
     * Where this resource is found.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $reference
     * @return $this
     */
    public function setReference($reference) {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRBoolean
     */
    public function getExampleBoolean() {
        return $this->exampleBoolean;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRBoolean $exampleBoolean
     * @return $this
     */
    public function setExampleBoolean($exampleBoolean) {
        $this->exampleBoolean = $exampleBoolean;
        return $this;
    }

    /**
     * @return \PHPFHIRGenerated\FHIRElement\FHIRReference
     */
    public function getExampleReference() {
        return $this->exampleReference;
    }

    /**
     * @param \PHPFHIRGenerated\FHIRElement\FHIRReference $exampleReference
     * @return $this
     */
    public function setExampleReference($exampleReference) {
        $this->exampleReference = $exampleReference;
        return $this;
    }

    /**
     * The relative path for primary page for this resource within the IG.
     * @return \PHPFHIRGenerated\FHIRElement\FHIRString
     */
    public function getRelativePath() {
        return $this->relativePath;
    }

    /**
     * The relative path for primary page for this resource within the IG.
     * @param \PHPFHIRGenerated\FHIRElement\FHIRString $relativePath
     * @return $this
     */
    public function setRelativePath($relativePath) {
        $this->relativePath = $relativePath;
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
            if (isset($data['reference'])) {
                $this->setReference($data['reference']);
            }
            if (isset($data['exampleBoolean'])) {
                $this->setExampleBoolean($data['exampleBoolean']);
            }
            if (isset($data['exampleReference'])) {
                $this->setExampleReference($data['exampleReference']);
            }
            if (isset($data['relativePath'])) {
                $this->setRelativePath($data['relativePath']);
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
        if (isset($this->reference)) $json['reference'] = $this->reference;
        if (isset($this->exampleBoolean)) $json['exampleBoolean'] = $this->exampleBoolean;
        if (isset($this->exampleReference)) $json['exampleReference'] = $this->exampleReference;
        if (isset($this->relativePath)) $json['relativePath'] = $this->relativePath;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ImplementationGuideOutputResource xmlns="http://hl7.org/fhir"></ImplementationGuideOutputResource>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->reference)) $this->reference->xmlSerialize(true, $sxe->addChild('reference'));
        if (isset($this->exampleBoolean)) $this->exampleBoolean->xmlSerialize(true, $sxe->addChild('exampleBoolean'));
        if (isset($this->exampleReference)) $this->exampleReference->xmlSerialize(true, $sxe->addChild('exampleReference'));
        if (isset($this->relativePath)) $this->relativePath->xmlSerialize(true, $sxe->addChild('relativePath'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}