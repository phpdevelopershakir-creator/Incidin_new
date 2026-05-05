<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('situation_prevention_yes_no_others', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            
            
            $table->string('is_forced_labor_q3')->nullable();
            $table->text('others_forced_labor_q3')->nullable();
            $table->string('is_crime_justice_q4')->nullable();
            $table->text('others_crime_justice_q4')->nullable();
           
    
           
          
            $table->string('is_involved_directly_trafficking_2q')->nullable();
            $table->text('others_involved_directly_trafficking_2q')->nullable();
            $table->string('is_forced_labor_supply_chains_11q')->nullable();
            $table->text('others_forced_labor_supply_chains_11q')->nullable();
            $table->string('is_formal_written_procedures_15q')->nullable();
            $table->text('others_formal_written_procedures_15q')->nullable();
            $table->string('is_victim_identification_protocol_16q')->nullable();
            $table->text('others_victim_identification_protocol_16q')->nullable();
            $table->string('is_trafficking_among_risk_population_18q')->nullable();
            $table->text('others_trafficking_among_risk_population_18q')->nullable();
            $table->string('is_sex_trafficking_forced_labor_country_19q')->nullable();
            $table->text('others_sex_trafficking_forced_labor_country_19q')->nullable();
            $table->string('is_trafficking_victims_services_20q')->nullable();
            $table->text('others_trafficking_victims_services_20q')->nullable();
            $table->string('is_speak_law_enforcement_23q')->nullable();
            $table->text('others_speak_law_enforcement_23q')->nullable();
            $table->string('is_victim_centered_approach_28q')->nullable();
            $table->text('others_victim_centered_approach_28q')->nullable();
            $table->string('is_vots_received_assistance_53q')->nullable();
            $table->text('others_vots_received_assistance_53q')->nullable();
            $table->string('is_ministry_agency_organization_54q')->nullable();
            $table->text('others_ministry_agency_organization_54q')->nullable();
            $table->string('is_ministry_agency_organization_ctc_55q')->nullable();
            $table->text('others_ministry_agency_organization_ctc_55q')->nullable();
            $table->text('is_devote_implementation_q57')->nullable();
            $table->text('is_conduct_awareness_activities_q59')->nullable();
            $table->text('other_conduct_awareness_activities_q59')->nullable();
            $table->text('is_governments_on_trafficking_q60')->nullable();
            $table->text('is_government_devote_implement_q61')->nullable();
            $table->text('other_government_devote_implement_q61')->nullable();
        
            $table->text('is_official_allocation_review_q8')->nullable();
            $table->text('other_official_allocation_review_q8')->nullable();
            $table->text('is_adequately_jurisdicticon_q9')->nullable();
            $table->text('other_adequately_jurisdition_q9')->nullable();
           
    

            $table->boolean('is_supreme_court_q1')->nullable();
            $table->text('others_supreme_court_q1')->nullable();

            $table->boolean('is_supreme_court_q4')->nullable();
            $table->text('others_supreme_court_q4')->nullable();

            $table->boolean('is_complicit_official_q5')->nullable();
            $table->text('others_complicit_official_q5')->nullable();

            $table->boolean('is_unit_court_q6')->nullable();
            $table->text('others_unit_court_q6')->nullable();

            $table->boolean('is_exclusively_dedicated_trafficking_q7')->nullable();
            $table->text('other_exclusively_dedicated_trafficking_q7')->nullable();

            $table->boolean('is_involved_directly_trafficking_8q')->nullable();
            $table->text('other_involved_directly_trafficking_8q')->nullable();

            $table->boolean('is_exclusively_trafficking_q9')->nullable();
            $table->text('other_exclusively_trafficking_q9')->nullable();

            $table->boolean('is_exclusively_trafficking_q10')->nullable();
            $table->text('other_exclusively_trafficking_q10')->nullable();

            $table->boolean('is_commercial_sex_demands_q51')->nullable();
            $table->text('other_commercial_sex_demands_q51')->nullable();

            $table->boolean('is_government_prosecute_deport_q52')->nullable();
            $table->text('other_government_prosecute_deport_q52')->nullable();

            $table->boolean('is_country_diplomats_allegedly_q54')->nullable();
            $table->text('other_country_diplomats_allegedly_q54')->nullable();

            $table->boolean('is_government_provide_trafficking_q55')->nullable();
            $table->text('other_government_provide_trafficking_q55')->nullable();

            $table->boolean('is_exploitative_treatment_q50')->nullable();
            $table->text('other_exploitative_treatment_q50')->nullable();

            $table->boolean('is_awareness_campaigns_research_projects_q44')->nullable();
            $table->text('other_awareness_campaigns_research_projects_q44')->nullable();

            $table->boolean('is_national_plan_trafficking_q45')->nullable();
            $table->text('other_national_plan_trafficking_q45')->nullable();

            $table->boolean('is_government_change_regulated_q47')->nullable();
            $table->text('other_government_change_regulated_q47')->nullable();

            $table->boolean('is_government_agreements_transparent_q49')->nullable();
            $table->text('other_government_agreements_transparent_q49')->nullable();

            $table->boolean('is_government_agreements_transparent_q11')->nullable();
            $table->text('other_government_agreements_transparent_q11')->nullable();

            $table->boolean('is_report_country_narrative_protection_q17')->nullable();
            $table->text('other_report_country_narrative_protection_q17')->nullable();

            $table->boolean('is_specialized_trafficking_victims_q24')->nullable();
            $table->text('other_specialized_trafficking_victims_q24')->nullable();

            $table->boolean('is_government_cooperate_foreign_counterparts_q12')->nullable();
            $table->text('other_government_cooperate_foreign_counterparts_q12')->nullable();

            $table->integer('created_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('situation_prevention_yes_no_others');
    }
};
