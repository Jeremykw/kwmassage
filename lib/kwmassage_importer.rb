require "nokogiri"
file = File.open("kwmassage_export.xml")
doc = Nokogiri::XML(file)
file.close
items = doc.css("item")

# Formats WordPress date with time to appropriate string for nameing Jekyll post file 
def date_to_jekyll(wp_date)
  /^[0-9]{4}(-)[0-9]{2}(-)[0-9]{2}/.match(wp_date)
end

def meta_values(item, file)
  metadata = item.css("wp|postmeta")
  metadata.each do |data|
    case data.css("wp|meta_key").text
    when "_aioseop_description"
      file.puts "excerpt_separator: #{data.css("wp|meta_value").text}"
    when "_aioseop_keywords"
      file.puts "meta_keywords: #{data.css("wp|meta_value").text}"
    end
  end
end

def slug_value(item, file)
  if link = item.css("link").text
    category = /\/(.*?)\//.match(link)
    if category
      cat = category.to_s.gsub(/\//, "")
      file.puts "category: #{cat}"
    end
    slug = link.gsub("#{category}", "")
    slug_link = slug.gsub("/", "")
    file.puts "slug: #{slug_link}"
  end
end

items.each do |item|
  if item.css("wp|post_type").text == "post"
    wp_date = "#{item.css("wp|post_date").text}"
    new_post_file = File.new("../_posts/#{date_to_jekyll(wp_date)}-#{item.css("wp|post_name").text}.text", "w")

    new_post_file.puts "---"    
    new_post_file.puts "layout: #{item.css("wp|post_type").text}"
    new_post_file.puts "title: \"#{item.at_css("title").text}\""
    slug_value(item, new_post_file)
    # new_post_file.puts "permalink: /:categories/:title/"
    new_post_file.puts "post_id: #{item.css("wp|post_id").text}"
    meta_values(item, new_post_file)
    new_post_file.puts "---"
    new_post_file.puts "#{item.at_css("content|encoded").text}"
    
    new_post_file.close
  end
end
puts "eat my shorts"



