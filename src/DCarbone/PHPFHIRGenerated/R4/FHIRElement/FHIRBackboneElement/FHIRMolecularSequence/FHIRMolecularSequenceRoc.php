<?php

namespace DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence;

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

use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal;
use DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRConstants;
use DCarbone\PHPFHIRGenerated\R4\PHPFHIRTypeInterface;

/**
 * Raw data describing a biological sequence.
 *
 * Class FHIRMolecularSequenceRoc
 * @package \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence
 */
class FHIRMolecularSequenceRoc extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_ROC;
    const FIELD_F_MEASURE = 'fMeasure';
    const FIELD_F_MEASURE_EXT = '_fMeasure';
    const FIELD_NUM_FN = 'numFN';
    const FIELD_NUM_FN_EXT = '_numFN';
    const FIELD_NUM_FP = 'numFP';
    const FIELD_NUM_FP_EXT = '_numFP';
    const FIELD_NUM_TP = 'numTP';
    const FIELD_NUM_TP_EXT = '_numTP';
    const FIELD_PRECISION = 'precision';
    const FIELD_PRECISION_EXT = '_precision';
    const FIELD_SCORE = 'score';
    const FIELD_SCORE_EXT = '_score';
    const FIELD_SENSITIVITY = 'sensitivity';
    const FIELD_SENSITIVITY_EXT = '_sensitivity';

    /** @var string */
    private $_xmlns = 'http://hl7.org/fhir';

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal[]
     */
    protected $fMeasure = [];

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false negatives if the GQ score threshold was set to "score" field
     * value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger[]
     */
    protected $numFN = [];

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger[]
     */
    protected $numFP = [];

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of true positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger[]
     */
    protected $numTP = [];

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated precision if the GQ score threshold was set to "score" field value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal[]
     */
    protected $precision = [];

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Invidual data point representing the GQ (genotype quality) score threshold.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger[]
     */
    protected $score = [];

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     *
     * @var null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal[]
     */
    protected $sensitivity = [];

    /**
     * Validation map for fields in type MolecularSequence.Roc
     * @var array
     */
    private static $_validationRules = [    ];

    /**
     * FHIRMolecularSequenceRoc Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRMolecularSequenceRoc::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_F_MEASURE]) || isset($data[self::FIELD_F_MEASURE_EXT])) {
            if (isset($data[self::FIELD_F_MEASURE])) {
                $value = $data[self::FIELD_F_MEASURE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_F_MEASURE_EXT]) && is_array($data[self::FIELD_F_MEASURE_EXT])) {
                $ext = $data[self::FIELD_F_MEASURE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->addFMeasure($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRDecimal) {
                            $this->addFMeasure($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addFMeasure(new FHIRDecimal(array_merge($v, $iext)));
                            } else {
                                $this->addFMeasure(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addFMeasure(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->addFMeasure(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addFMeasure(new FHIRDecimal($iext));
                }
            }
        }
        if (isset($data[self::FIELD_NUM_FN]) || isset($data[self::FIELD_NUM_FN_EXT])) {
            if (isset($data[self::FIELD_NUM_FN])) {
                $value = $data[self::FIELD_NUM_FN];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NUM_FN_EXT]) && is_array($data[self::FIELD_NUM_FN_EXT])) {
                $ext = $data[self::FIELD_NUM_FN_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->addNumFN($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRInteger) {
                            $this->addNumFN($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addNumFN(new FHIRInteger(array_merge($v, $iext)));
                            } else {
                                $this->addNumFN(new FHIRInteger([FHIRInteger::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addNumFN(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->addNumFN(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addNumFN(new FHIRInteger($iext));
                }
            }
        }
        if (isset($data[self::FIELD_NUM_FP]) || isset($data[self::FIELD_NUM_FP_EXT])) {
            if (isset($data[self::FIELD_NUM_FP])) {
                $value = $data[self::FIELD_NUM_FP];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NUM_FP_EXT]) && is_array($data[self::FIELD_NUM_FP_EXT])) {
                $ext = $data[self::FIELD_NUM_FP_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->addNumFP($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRInteger) {
                            $this->addNumFP($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addNumFP(new FHIRInteger(array_merge($v, $iext)));
                            } else {
                                $this->addNumFP(new FHIRInteger([FHIRInteger::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addNumFP(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->addNumFP(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addNumFP(new FHIRInteger($iext));
                }
            }
        }
        if (isset($data[self::FIELD_NUM_TP]) || isset($data[self::FIELD_NUM_TP_EXT])) {
            if (isset($data[self::FIELD_NUM_TP])) {
                $value = $data[self::FIELD_NUM_TP];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_NUM_TP_EXT]) && is_array($data[self::FIELD_NUM_TP_EXT])) {
                $ext = $data[self::FIELD_NUM_TP_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->addNumTP($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRInteger) {
                            $this->addNumTP($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addNumTP(new FHIRInteger(array_merge($v, $iext)));
                            } else {
                                $this->addNumTP(new FHIRInteger([FHIRInteger::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addNumTP(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->addNumTP(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addNumTP(new FHIRInteger($iext));
                }
            }
        }
        if (isset($data[self::FIELD_PRECISION]) || isset($data[self::FIELD_PRECISION_EXT])) {
            if (isset($data[self::FIELD_PRECISION])) {
                $value = $data[self::FIELD_PRECISION];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_PRECISION_EXT]) && is_array($data[self::FIELD_PRECISION_EXT])) {
                $ext = $data[self::FIELD_PRECISION_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->addPrecision($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRDecimal) {
                            $this->addPrecision($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addPrecision(new FHIRDecimal(array_merge($v, $iext)));
                            } else {
                                $this->addPrecision(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addPrecision(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->addPrecision(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addPrecision(new FHIRDecimal($iext));
                }
            }
        }
        if (isset($data[self::FIELD_SCORE]) || isset($data[self::FIELD_SCORE_EXT])) {
            if (isset($data[self::FIELD_SCORE])) {
                $value = $data[self::FIELD_SCORE];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SCORE_EXT]) && is_array($data[self::FIELD_SCORE_EXT])) {
                $ext = $data[self::FIELD_SCORE_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRInteger) {
                    $this->addScore($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRInteger) {
                            $this->addScore($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addScore(new FHIRInteger(array_merge($v, $iext)));
                            } else {
                                $this->addScore(new FHIRInteger([FHIRInteger::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addScore(new FHIRInteger(array_merge($ext, $value)));
                } else {
                    $this->addScore(new FHIRInteger([FHIRInteger::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addScore(new FHIRInteger($iext));
                }
            }
        }
        if (isset($data[self::FIELD_SENSITIVITY]) || isset($data[self::FIELD_SENSITIVITY_EXT])) {
            if (isset($data[self::FIELD_SENSITIVITY])) {
                $value = $data[self::FIELD_SENSITIVITY];
            } else {
                $value = null;
            }
            if (isset($data[self::FIELD_SENSITIVITY_EXT]) && is_array($data[self::FIELD_SENSITIVITY_EXT])) {
                $ext = $data[self::FIELD_SENSITIVITY_EXT];
            } else {
                $ext = [];
            }
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->addSensitivity($value);
                } else if (is_array($value)) {
                    foreach($value as $i => $v) {
                        if ($v instanceof FHIRDecimal) {
                            $this->addSensitivity($v);
                        } else {
                            $iext = (isset($ext[$i]) && is_array($ext[$i])) ? $ext[$i] : [];
                            if (is_array($v)) {
                                $this->addSensitivity(new FHIRDecimal(array_merge($v, $iext)));
                            } else {
                                $this->addSensitivity(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $v] + $iext));
                            }
                        }
                    }
                } elseif (is_array($value)) {
                    $this->addSensitivity(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->addSensitivity(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } else if ([] !== $ext) {
                foreach($ext as $iext) {
                    $this->addSensitivity(new FHIRDecimal($iext));
                }
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
        return "<MolecularSequenceRoc{$xmlns}></MolecularSequenceRoc>";
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal[]
     */
    public function getFMeasure()
    {
        return $this->fMeasure;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $fMeasure
     * @return static
     */
    public function addFMeasure($fMeasure = null)
    {
        if (null === $fMeasure) {
            $this->fMeasure = [];
            return $this;
        }
        if ($fMeasure instanceof FHIRDecimal) {
            $this->fMeasure[] = $fMeasure;
            return $this;
        }
        $this->fMeasure[] = new FHIRDecimal($fMeasure);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated fScore if the GQ score threshold was set to "score" field value.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal[] $fMeasure
     * @return static
     */
    public function setFMeasure(array $fMeasure = [])
    {
        $this->fMeasure = [];
        if ([] === $fMeasure) {
            return $this;
        }
        foreach($fMeasure as $v) {
            if ($v instanceof FHIRDecimal) {
                $this->addFMeasure($v);
            } else {
                $this->addFMeasure(new FHIRDecimal($v));
            }
        }
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false negatives if the GQ score threshold was set to "score" field
     * value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger[]
     */
    public function getNumFN()
    {
        return $this->numFN;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false negatives if the GQ score threshold was set to "score" field
     * value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $numFN
     * @return static
     */
    public function addNumFN($numFN = null)
    {
        if (null === $numFN) {
            $this->numFN = [];
            return $this;
        }
        if ($numFN instanceof FHIRInteger) {
            $this->numFN[] = $numFN;
            return $this;
        }
        $this->numFN[] = new FHIRInteger($numFN);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false negatives if the GQ score threshold was set to "score" field
     * value.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger[] $numFN
     * @return static
     */
    public function setNumFN(array $numFN = [])
    {
        $this->numFN = [];
        if ([] === $numFN) {
            return $this;
        }
        foreach($numFN as $v) {
            if ($v instanceof FHIRInteger) {
                $this->addNumFN($v);
            } else {
                $this->addNumFN(new FHIRInteger($v));
            }
        }
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger[]
     */
    public function getNumFP()
    {
        return $this->numFP;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $numFP
     * @return static
     */
    public function addNumFP($numFP = null)
    {
        if (null === $numFP) {
            $this->numFP = [];
            return $this;
        }
        if ($numFP instanceof FHIRInteger) {
            $this->numFP[] = $numFP;
            return $this;
        }
        $this->numFP[] = new FHIRInteger($numFP);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of false positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger[] $numFP
     * @return static
     */
    public function setNumFP(array $numFP = [])
    {
        $this->numFP = [];
        if ([] === $numFP) {
            return $this;
        }
        foreach($numFP as $v) {
            if ($v instanceof FHIRInteger) {
                $this->addNumFP($v);
            } else {
                $this->addNumFP(new FHIRInteger($v));
            }
        }
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of true positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger[]
     */
    public function getNumTP()
    {
        return $this->numTP;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of true positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $numTP
     * @return static
     */
    public function addNumTP($numTP = null)
    {
        if (null === $numTP) {
            $this->numTP = [];
            return $this;
        }
        if ($numTP instanceof FHIRInteger) {
            $this->numTP[] = $numTP;
            return $this;
        }
        $this->numTP[] = new FHIRInteger($numTP);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * The number of true positives if the GQ score threshold was set to "score" field
     * value.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger[] $numTP
     * @return static
     */
    public function setNumTP(array $numTP = [])
    {
        $this->numTP = [];
        if ([] === $numTP) {
            return $this;
        }
        foreach($numTP as $v) {
            if ($v instanceof FHIRInteger) {
                $this->addNumTP($v);
            } else {
                $this->addNumTP(new FHIRInteger($v));
            }
        }
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated precision if the GQ score threshold was set to "score" field value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal[]
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated precision if the GQ score threshold was set to "score" field value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $precision
     * @return static
     */
    public function addPrecision($precision = null)
    {
        if (null === $precision) {
            $this->precision = [];
            return $this;
        }
        if ($precision instanceof FHIRDecimal) {
            $this->precision[] = $precision;
            return $this;
        }
        $this->precision[] = new FHIRDecimal($precision);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated precision if the GQ score threshold was set to "score" field value.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal[] $precision
     * @return static
     */
    public function setPrecision(array $precision = [])
    {
        $this->precision = [];
        if ([] === $precision) {
            return $this;
        }
        foreach($precision as $v) {
            if ($v instanceof FHIRDecimal) {
                $this->addPrecision($v);
            } else {
                $this->addPrecision(new FHIRDecimal($v));
            }
        }
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Invidual data point representing the GQ (genotype quality) score threshold.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger[]
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Invidual data point representing the GQ (genotype quality) score threshold.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger $score
     * @return static
     */
    public function addScore($score = null)
    {
        if (null === $score) {
            $this->score = [];
            return $this;
        }
        if ($score instanceof FHIRInteger) {
            $this->score[] = $score;
            return $this;
        }
        $this->score[] = new FHIRInteger($score);
        return $this;
    }

    /**
     * A whole number
     * 32 bit number; for values larger than this, use decimal
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Invidual data point representing the GQ (genotype quality) score threshold.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRInteger[] $score
     * @return static
     */
    public function setScore(array $score = [])
    {
        $this->score = [];
        if ([] === $score) {
            return $this;
        }
        foreach($score as $v) {
            if ($v instanceof FHIRInteger) {
                $this->addScore($v);
            } else {
                $this->addScore(new FHIRInteger($v));
            }
        }
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     *
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal[]
     */
    public function getSensitivity()
    {
        return $this->sensitivity;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     *
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal $sensitivity
     * @return static
     */
    public function addSensitivity($sensitivity = null)
    {
        if (null === $sensitivity) {
            $this->sensitivity = [];
            return $this;
        }
        if ($sensitivity instanceof FHIRDecimal) {
            $this->sensitivity[] = $sensitivity;
            return $this;
        }
        $this->sensitivity[] = new FHIRDecimal($sensitivity);
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Calculated sensitivity if the GQ score threshold was set to "score" field value.
     *
     * @param \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRDecimal[] $sensitivity
     * @return static
     */
    public function setSensitivity(array $sensitivity = [])
    {
        $this->sensitivity = [];
        if ([] === $sensitivity) {
            return $this;
        }
        foreach($sensitivity as $v) {
            if ($v instanceof FHIRDecimal) {
                $this->addSensitivity($v);
            } else {
                $this->addSensitivity(new FHIRDecimal($v));
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
        if ([] !== ($vs = $this->getFMeasure())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_F_MEASURE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getNumFN())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NUM_FN, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getNumFP())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NUM_FP, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getNumTP())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_NUM_TP, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getPrecision())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_PRECISION, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getScore())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SCORE, $i)] = $fieldErrs;
                }
            }
        }
        if ([] !== ($vs = $this->getSensitivity())) {
            foreach($vs as $i => $v) {
                if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                    $errs[sprintf('%s.%d', self::FIELD_SENSITIVITY, $i)] = $fieldErrs;
                }
            }
        }
        if (isset($validationRules[self::FIELD_F_MEASURE])) {
            $v = $this->getFMeasure();
            foreach($validationRules[self::FIELD_F_MEASURE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_ROC, self::FIELD_F_MEASURE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_F_MEASURE])) {
                        $errs[self::FIELD_F_MEASURE] = [];
                    }
                    $errs[self::FIELD_F_MEASURE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUM_FN])) {
            $v = $this->getNumFN();
            foreach($validationRules[self::FIELD_NUM_FN] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_ROC, self::FIELD_NUM_FN, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUM_FN])) {
                        $errs[self::FIELD_NUM_FN] = [];
                    }
                    $errs[self::FIELD_NUM_FN][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUM_FP])) {
            $v = $this->getNumFP();
            foreach($validationRules[self::FIELD_NUM_FP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_ROC, self::FIELD_NUM_FP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUM_FP])) {
                        $errs[self::FIELD_NUM_FP] = [];
                    }
                    $errs[self::FIELD_NUM_FP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_NUM_TP])) {
            $v = $this->getNumTP();
            foreach($validationRules[self::FIELD_NUM_TP] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_ROC, self::FIELD_NUM_TP, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_NUM_TP])) {
                        $errs[self::FIELD_NUM_TP] = [];
                    }
                    $errs[self::FIELD_NUM_TP][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_PRECISION])) {
            $v = $this->getPrecision();
            foreach($validationRules[self::FIELD_PRECISION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_ROC, self::FIELD_PRECISION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_PRECISION])) {
                        $errs[self::FIELD_PRECISION] = [];
                    }
                    $errs[self::FIELD_PRECISION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SCORE])) {
            $v = $this->getScore();
            foreach($validationRules[self::FIELD_SCORE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_ROC, self::FIELD_SCORE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SCORE])) {
                        $errs[self::FIELD_SCORE] = [];
                    }
                    $errs[self::FIELD_SCORE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_SENSITIVITY])) {
            $v = $this->getSensitivity();
            foreach($validationRules[self::FIELD_SENSITIVITY] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_MOLECULAR_SEQUENCE_DOT_ROC, self::FIELD_SENSITIVITY, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_SENSITIVITY])) {
                        $errs[self::FIELD_SENSITIVITY] = [];
                    }
                    $errs[self::FIELD_SENSITIVITY][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param \SimpleXMLElement|string|null $sxe
     * @param null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc $type
     * @param null|int $libxmlOpts
     * @return null|\DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc
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
                throw new \DomainException(sprintf('FHIRMolecularSequenceRoc::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
        }
        if (!($sxe instanceof \SimpleXMLElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRMolecularSequenceRoc::xmlUnserialize - $sxe value must be null, \\SimpleXMLElement, or valid XML string, %s seen', gettype($sxe)));
        }
        if (null === $type) {
            $type = new FHIRMolecularSequenceRoc;
        } elseif (!is_object($type) || !($type instanceof FHIRMolecularSequenceRoc)) {
            throw new \RuntimeException(sprintf(
                'FHIRMolecularSequenceRoc::xmlUnserialize - $type must be instance of \DCarbone\PHPFHIRGenerated\R4\FHIRElement\FHIRBackboneElement\FHIRMolecularSequence\FHIRMolecularSequenceRoc or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        FHIRBackboneElement::xmlUnserialize($sxe, $type);
        $xmlNamespaces = $sxe->getDocNamespaces(false, false);
        if ([] !== $xmlNamespaces) {
            $ns = reset($xmlNamespaces);
            if (false !== $ns && '' !== $ns) {
                $type->_xmlns = $ns;
            }
        }
        $attributes = $sxe->attributes();
        $children = $sxe->children();
        if (isset($children->fMeasure)) {
            foreach($children->fMeasure as $child) {
                $type->addFMeasure(FHIRDecimal::xmlUnserialize($child));
            }
        }
        if (isset($children->numFN)) {
            foreach($children->numFN as $child) {
                $type->addNumFN(FHIRInteger::xmlUnserialize($child));
            }
        }
        if (isset($children->numFP)) {
            foreach($children->numFP as $child) {
                $type->addNumFP(FHIRInteger::xmlUnserialize($child));
            }
        }
        if (isset($children->numTP)) {
            foreach($children->numTP as $child) {
                $type->addNumTP(FHIRInteger::xmlUnserialize($child));
            }
        }
        if (isset($children->precision)) {
            foreach($children->precision as $child) {
                $type->addPrecision(FHIRDecimal::xmlUnserialize($child));
            }
        }
        if (isset($children->score)) {
            foreach($children->score as $child) {
                $type->addScore(FHIRInteger::xmlUnserialize($child));
            }
        }
        if (isset($children->sensitivity)) {
            foreach($children->sensitivity as $child) {
                $type->addSensitivity(FHIRDecimal::xmlUnserialize($child));
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
        if ([] !== ($vs = $this->getFMeasure())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_F_MEASURE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getNumFN())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NUM_FN, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getNumFP())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NUM_FP, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getNumTP())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_NUM_TP, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getPrecision())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_PRECISION, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getScore())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SCORE, null, $v->_getFHIRXMLNamespace()));
            }
        }
        if ([] !== ($vs = $this->getSensitivity())) {
            foreach($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $v->xmlSerialize($sxe->addChild(self::FIELD_SENSITIVITY, null, $v->_getFHIRXMLNamespace()));
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
        if ([] !== ($vs = $this->getFMeasure())) {
            $a[self::FIELD_F_MEASURE] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_F_MEASURE][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRDecimal::FIELD_VALUE]) || array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRDecimal::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_F_MEASURE_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getNumFN())) {
            $a[self::FIELD_NUM_FN] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_NUM_FN][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRInteger::FIELD_VALUE]) || array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRInteger::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_NUM_FN_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getNumFP())) {
            $a[self::FIELD_NUM_FP] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_NUM_FP][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRInteger::FIELD_VALUE]) || array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRInteger::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_NUM_FP_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getNumTP())) {
            $a[self::FIELD_NUM_TP] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_NUM_TP][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRInteger::FIELD_VALUE]) || array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRInteger::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_NUM_TP_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getPrecision())) {
            $a[self::FIELD_PRECISION] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_PRECISION][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRDecimal::FIELD_VALUE]) || array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRDecimal::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_PRECISION_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getScore())) {
            $a[self::FIELD_SCORE] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SCORE][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRInteger::FIELD_VALUE]) || array_key_exists(FHIRInteger::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRInteger::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_SCORE_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->getSensitivity())) {
            $a[self::FIELD_SENSITIVITY] = [];
            $encs = [];
            $encValued = false;
            foreach ($vs as $v) {
                if (null === $v) {
                    continue;
                }
                $a[self::FIELD_SENSITIVITY][] = $v->getValue();
                $enc = $v->jsonSerialize();
                $cnt = count($enc);
                if (0 === $cnt || (1 === $cnt && (isset($enc[FHIRDecimal::FIELD_VALUE]) || array_key_exists(FHIRDecimal::FIELD_VALUE, $enc)))) {
                    $encs[] = null;
                } else {
                    unset($enc[FHIRDecimal::FIELD_VALUE]);
                    $encs[] = $enc;
                    $encValued = true;
                }
            }
            if ($encValued) {
                $a[self::FIELD_SENSITIVITY_EXT] = $encs;
            }
        }
        if ([] !== ($vs = $this->_getFHIRComments())) {
            $a[PHPFHIRConstants::JSON_FIELD_FHIR_COMMENTS] = $vs;
        }
        return $a;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return self::FHIR_TYPE_NAME;
    }
}