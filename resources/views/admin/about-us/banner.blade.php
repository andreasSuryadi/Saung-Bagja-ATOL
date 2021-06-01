@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.admin-user.actions.create'))

@section('body')
    <div class="container-xl">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Banner
            </div>

            <div class="card-body">
                <banner-about-us-form
                    :action="'{{ url('admin/about-us/banner/save') }}'"
                    :data="{{ $pageSection->toJson() }}"
                    v-cloak
                    inline-template>
                    <form class="form-horizontal form-create" method="post" @submit.prevent="onSubmit" :action="action" novalidate>
                        <div class="form-group row align-items-center" :class="{'has-danger': errors.has('title'), 'has-success': fields.title && fields.title.valid }">
                            <label for="title" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.home.columns.title') }}</label>
                                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                                <input type="text" v-model="form.title" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('title'), 'form-control-success': fields.title && fields.title.valid}" id="title" name="title" placeholder="{{ trans('admin.home.columns.title') }}">
                                <div v-if="errors.has('title')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('title') }}</div>
                            </div>
                        </div>

                        <div class="form-group row align-items-center" :class="{'has-danger': errors.has('subtitle'), 'has-success': fields.subtitle && fields.subtitle.valid }">
                            <label for="subtitle" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.home.columns.subtitle') }}</label>
                                <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
                                <input type="text" v-model="form.subtitle" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('subtitle'), 'form-control-success': fields.subtitle && fields.subtitle.valid}" id="subtitle" name="subtitle" placeholder="{{ trans('admin.home.columns.subtitle') }}">
                                <div v-if="errors.has('subtitle')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('subtitle') }}</div>
                            </div>
                        </div>

                        <div class="row form-group align-items-center">
                            <label class="col-md-2 col-form-label text-md-right">Banner</label>
                            <div class="col-md-8">
                                @include('brackets/admin-ui::admin.includes.media-uploader', [
                                'mediaCollection' => app(App\Models\PageSection::class)->getMediaCollection('banner'),
                                'media' => $pageSection->getThumbs200ForCollection('banner'),
                                'label' => 'Banner'
                                ])
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary button-save" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-save'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </form>
                </banner-about-us-form>
            </div>
        </div>
    </div>
@endsection