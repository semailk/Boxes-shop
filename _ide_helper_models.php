<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Attribute
 *
 * @property int $id
 * @property int $filter_id
 * @property array $title
 * @property int|null $parent_id
 * @property int $lft
 * @property int $rgt
 * @property int $depth
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Kalnoy\Nestedset\Collection|Attribute[] $children
 * @property-read int|null $children_count
 * @property-read \App\Models\Filter $filter
 * @property-read array $translations
 * @property-read Attribute|null $parent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @method static \Kalnoy\Nestedset\Collection|static[] all($columns = ['*'])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute ancestorsAndSelf($id, array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute ancestorsOf($id, array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute applyNestedSetScope(?string $table = null)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute countErrors()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute d()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute defaultOrder(string $dir = 'asc')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute descendantsAndSelf($id, array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute descendantsOf($id, array $columns = [], $andSelf = false)
 * @method static \Database\Factories\AttributeFactory factory(...$parameters)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute fixSubtree($root)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute fixTree($root = null)
 * @method static \Kalnoy\Nestedset\Collection|static[] get($columns = ['*'])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute getNodeData($id, $required = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute getPlainNodeData($id, $required = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute getTotalErrors()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute hasChildren()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute hasParent()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute isBroken()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute leaves(array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute makeGap(int $cut, int $height)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute moveNode($key, $position)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute newModelQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute newQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute orWhereAncestorOf(bool $id, bool $andSelf = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute orWhereDescendantOf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute orWhereNodeBetween($values)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute orWhereNotDescendantOf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute query()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute rebuildSubtree($root, array $data, $delete = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute rebuildTree(array $data, $delete = false, $root = null)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute reversed()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute root(array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute whereAncestorOf($id, $andSelf = false, $boolean = 'and')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute whereAncestorOrSelf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute whereCreatedAt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute whereDepth($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute whereDescendantOf($id, $boolean = 'and', $not = false, $andSelf = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute whereDescendantOrSelf(string $id, string $boolean = 'and', string $not = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute whereFilterId($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute whereId($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute whereIsAfter($id, $boolean = 'and')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute whereIsBefore($id, $boolean = 'and')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute whereIsLeaf()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute whereIsRoot()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute whereLft($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute whereNodeBetween($values, $boolean = 'and', $not = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute whereNotDescendantOf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute whereParentId($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute whereRgt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute whereTitle($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute whereUpdatedAt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute withDepth(string $as = 'depth')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Attribute withoutRoot()
 */
	class Attribute extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Brand
 *
 * @package App\Models
 * @property int $id
 * @property array $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @method static \Database\Factories\BrandFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand query()
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Brand whereUpdatedAt($value)
 */
	class Brand extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Category
 *
 * @package App\Models
 * @property string $slug
 * @property int $id
 * @property array $name
 * @property int|null $parent_id
 * @property int $lft
 * @property int $rgt
 * @property int $depth
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Kalnoy\Nestedset\Collection|Category[] $children
 * @property-read int|null $children_count
 * @property-read \Kalnoy\Nestedset\Collection|\App\Models\Filter[] $filters
 * @property-read int|null $filters_count
 * @property-read array $translations
 * @property-read Category|null $parent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @method static \Kalnoy\Nestedset\Collection|static[] all($columns = ['*'])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category ancestorsAndSelf($id, array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category ancestorsOf($id, array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category applyNestedSetScope(?string $table = null)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category countErrors()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category d()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category defaultOrder(string $dir = 'asc')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category descendantsAndSelf($id, array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category descendantsOf($id, array $columns = [], $andSelf = false)
 * @method static \Database\Factories\CategoryFactory factory(...$parameters)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category fixSubtree($root)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category fixTree($root = null)
 * @method static \Kalnoy\Nestedset\Collection|static[] get($columns = ['*'])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category getNodeData($id, $required = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category getPlainNodeData($id, $required = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category getTotalErrors()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category hasChildren()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category hasParent()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category isBroken()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category leaves(array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category makeGap(int $cut, int $height)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category moveNode($key, $position)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category newModelQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category newQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category orWhereAncestorOf(bool $id, bool $andSelf = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category orWhereDescendantOf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category orWhereNodeBetween($values)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category orWhereNotDescendantOf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category query()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category rebuildSubtree($root, array $data, $delete = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category rebuildTree(array $data, $delete = false, $root = null)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category reversed()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category root(array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereAncestorOf($id, $andSelf = false, $boolean = 'and')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereAncestorOrSelf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereCreatedAt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereDepth($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereDescendantOf($id, $boolean = 'and', $not = false, $andSelf = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereDescendantOrSelf(string $id, string $boolean = 'and', string $not = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereId($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereIsAfter($id, $boolean = 'and')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereIsBefore($id, $boolean = 'and')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereIsLeaf()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereIsRoot()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereLft($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereName($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereNodeBetween($values, $boolean = 'and', $not = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereNotDescendantOf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereParentId($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereRgt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereSlug($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category whereUpdatedAt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category withDepth(string $as = 'depth')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category withoutRoot()
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Content
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Content newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Content newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Content query()
 */
	class Content extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Feedback
 *
 * @package App\Models
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $message
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\FeedbackFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback query()
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feedback whereUpdatedAt($value)
 */
	class Feedback extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Filter
 *
 * @package App\Models
 * @property integer $category_id
 * @property string $title
 * @property int $id
 * @property int|null $parent_id
 * @property int $lft
 * @property int $rgt
 * @property int $depth
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Kalnoy\Nestedset\Collection|\App\Models\Attribute[] $attributes
 * @property-read int|null $attributes_count
 * @property-read \App\Models\Category|null $category
 * @property-read \Kalnoy\Nestedset\Collection|Filter[] $children
 * @property-read int|null $children_count
 * @property-read array $translations
 * @property-read Filter|null $parent
 * @method static \Kalnoy\Nestedset\Collection|static[] all($columns = ['*'])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter ancestorsAndSelf($id, array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter ancestorsOf($id, array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter applyNestedSetScope(?string $table = null)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter countErrors()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter d()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter defaultOrder(string $dir = 'asc')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter descendantsAndSelf($id, array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter descendantsOf($id, array $columns = [], $andSelf = false)
 * @method static \Database\Factories\FilterFactory factory(...$parameters)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter fixSubtree($root)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter fixTree($root = null)
 * @method static \Kalnoy\Nestedset\Collection|static[] get($columns = ['*'])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter getNodeData($id, $required = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter getPlainNodeData($id, $required = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter getTotalErrors()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter hasChildren()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter hasParent()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter isBroken()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter leaves(array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter makeGap(int $cut, int $height)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter moveNode($key, $position)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter newModelQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter newQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter orWhereAncestorOf(bool $id, bool $andSelf = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter orWhereDescendantOf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter orWhereNodeBetween($values)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter orWhereNotDescendantOf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter query()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter rebuildSubtree($root, array $data, $delete = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter rebuildTree(array $data, $delete = false, $root = null)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter reversed()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter root(array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter whereAncestorOf($id, $andSelf = false, $boolean = 'and')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter whereAncestorOrSelf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter whereCategoryId($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter whereCreatedAt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter whereDepth($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter whereDescendantOf($id, $boolean = 'and', $not = false, $andSelf = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter whereDescendantOrSelf(string $id, string $boolean = 'and', string $not = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter whereId($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter whereIsAfter($id, $boolean = 'and')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter whereIsBefore($id, $boolean = 'and')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter whereIsLeaf()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter whereIsRoot()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter whereLft($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter whereNodeBetween($values, $boolean = 'and', $not = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter whereNotDescendantOf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter whereParentId($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter whereRgt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter whereTitle($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter whereUpdatedAt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter withDepth(string $as = 'depth')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Filter withoutRoot()
 */
	class Filter extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Order
 *
 * @package App\Models
 * @property string $uuid
 * @property integer $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property string $email
 * @property string $country
 * @property string $city
 * @property string $address
 * @property string $comment
 * @property integer $status
 * @property string $track_code
 * @property string $paid_amount
 * @property int $id
 * @property int $payment_type
 * @property string $delivery_option
 * @property \Illuminate\Support\Carbon|null $payment_time
 * @property mixed|null $payment_information
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\OrderFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDeliveryOption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaidAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentInformation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePaymentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTrackCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUuid($value)
 */
	class Order extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Product
 *
 * @package App\Models
 * @property string $slug
 * @property float $regular_price
 * @property float $sale_percentage
 * @property float $adjusted_price
 * @property integer $stock_status
 * @property integer $stock_quantity
 * @property string $sku
 * @property string $xls_tag
 * @property int $id
 * @property int $brand_id
 * @property int $category_id
 * @property array $name
 * @property array $annotation
 * @property array $description
 * @property array|null $tags
 * @property array $gallery
 * @property array $mete_title
 * @property array $meta_description
 * @property array|null $meta_keywords
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Kalnoy\Nestedset\Collection|\App\Models\Attribute[] $attributes
 * @property-read int|null $attributes_count
 * @property-read \App\Models\Brand $brand
 * @property-read \App\Models\Category $category
 * @property-read array $translations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Review[] $reviews
 * @property-read int|null $reviews_count
 * @method static \Database\Factories\ProductFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereAdjustedPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereAnnotation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereGallery($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereMetaKeywords($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereMeteTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereRegularPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSalePercentage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStockQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStockStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereTags($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereXlsTag($value)
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Review
 *
 * @package App\Models
 * @property string $name
 * @property string $email
 * @property integer $user_id
 * @property integer $product_id
 * @property integer $rating
 * @property string $review
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Product $product
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\ReviewFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Review newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Review newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Review query()
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereReview($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereUserId($value)
 */
	class Review extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Subscriber
 *
 * @package App\Models
 * @property string $email
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\SubscriberFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber query()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereUpdatedAt($value)
 */
	class Subscriber extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property integer $role
 * @property string $avatar
 * @property string $phone
 * @property string $region
 * @property string $city
 * @property string $street
 * @property string $street_number
 * @property array $autocomplete_data
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $last_name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Review[] $reviews
 * @property-read int|null $reviews_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAutocompleteData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStreetNumber($value)
 */
	class User extends \Eloquent {}
}

